<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    public function redirect()
    {

        $query = http_build_query([
            'client_id' => config('client_auth.client_id'),
            'redirect_uri' => config('client_auth.redirect_uri'),
            'response_type' => 'code',
            'scope' => '',
        ]);

        return redirect(config('client_auth.server_uri').'/oauth/authorize?'.$query);
    }

    public function callback(Request $request)
    {
        $http = new Client;

        $response = $http->post(config('client_auth.server_uri').'/oauth/token', [
            'form_params' => [
                'grant_type' => 'authorization_code',
                'client_id' => config('client_auth.client_id'),
                'client_secret' => config('client_auth.client_secret'),
                'redirect_uri' => config('client_auth.redirect_uri'),
                'code' => $request->code,
            ],
        ]);


        $access = json_decode((string)$response->getBody());

        if (isset($access->access_token) && $access->access_token) {
            $access_token = $access->access_token;
            $ch = curl_init();
            $url = config('client_auth.server_uri').'/api/user';
            $header = array(
                'Authorization: Bearer ' . $access_token
            );

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            $result = curl_exec($ch);
            curl_close($ch);

            $response = json_decode($result, true);

            $user = User::where('email',$response['email'])->first();
            if($user){
                $user->update([
                    'email' => $user->email,
                    'name' => $user->name,
                    'password' => $user->password,
                    'token' => $access->access_token
                ]);

                Auth::login($user);
            }
            else {
                $user = User::firstOrCreate([
                        'email' => $response['email'],
                        'name' => $response['name'],
                        'password' => Hash::make('gfhjkm'),
                        'token' => $access->access_token
                    ]
                );

                Auth::login($user);
            }

            return response()->redirectTo('/');
        }
    }

    public function authByToken(Request $request)
    {
        $access_token = $request->access_token;

        if(empty($access_token)){
            return response()->redirectTo('/redirect');
        }
        // use above token to make further api calls in this session or until the access token expires
        $ch = curl_init();
        $url = config('client_auth.server_uri').'/api/user';
        $header = array(
            'Authorization: Bearer '. $access_token
        );


        curl_setopt($ch,CURLOPT_URL, $url );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        $result = curl_exec($ch);
        curl_close($ch);

        $response = json_decode($result, true);

        $user = User::where('email',$response['email'])->first();
        if($user){
            $user->update([
                'email' => $user->email,
                'name' => $user->name,
                'password' => $user->password,
                'token' => $access_token
            ]);

            Auth::login($user);
        }
        else {
            $user = User::firstOrCreate([
                    'email' => $response['email'],
                    'name' => $response['name'],
                    'password' => Hash::make('gfhjkm'),
                    'token' => $access_token
                ]
            );

            Auth::login($user);
        }

        return response()->redirectTo('/');
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();

        return redirect()->route('login');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
