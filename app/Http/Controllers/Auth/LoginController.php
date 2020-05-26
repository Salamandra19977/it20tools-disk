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
use Illuminate\Support\Facades\Http;

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
    protected $redirectTo = '/disk';

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
                'code' => substr($request->getRequestUri(),20),
            ],
        ]);

        $access = json_decode((string)$response->getBody());

        if (isset($access->access_token) && $access->access_token) {
            $access_token = $access->access_token;

            $response = $http->get(config('client_auth.server_uri').'/api/user', [
                'headers' => [
                    'Authorization' => 'Bearer '.$access_token,
                ],
            ]);

            $data = json_decode((string)$response->getBody());

            $user = User::where('email',$data->email)->first();

            if($user){
                $user->update([
                    'email' => $user->email,
                    'name' => $user->name,
                    'avatar_url' => $user->avatar_url,
                    'password' => $user->password,
                    'token' => $access->access_token
                ]);

                Auth::login($user);
            }
            else {
                $user = User::firstOrCreate([
                        'email' => $data->email,
                        'name' => $data->name." ".$data->surname,
                        'avatar_url' => $data->avatar_url,
                        'password' => Hash::make('gfhjkm'),
                        'token' => $access->access_token
                    ]
                );

                Auth::login($user);
            }

            return response()->redirectTo('/disk');
        }
    }

    public function authByToken(Request $request)
    {
        $access_token = substr($request->getRequestUri(),20);

        if(empty($access_token)){
            return response()->redirectTo('/redirect');
        }

        $http = new Client;
        $response = $http->get(config('client_auth.server_uri').'/api/user', [
            'headers' => [
                'Authorization' => 'Bearer '.$access_token,
            ],
        ]);

        $data = json_decode((string)$response->getBody());

        $user = User::where('email',$data->email)->first();

        if($user){
            $user->update([
                'email' => $user->email,
                'name' => $user->name,
                'password' => $user->password,
                'avatar_url' => $user->avatar_url,
                'token' => $access_token,
            ]);

            Auth::login($user);
        }
        else {
            $user = User::firstOrCreate([
                    'email' => $data->email,
                    'name' => $data->name." ".$data->surname,
                    'password' => Hash::make('gfhjkm'),
                    'avatar_url' => $data->avatar_url,
                    'token' => $access_token,
                ]
            );

            Auth::login($user);
        }

        return response()->redirectTo('/disk');
    }

    public function logout(Request $request)
    {
        $access_token = Auth::user()->token;

        $this->guard()->logout();
        $request->session()->invalidate();

        $http = new Client;
        $response = $http->request('GET', config('client_auth.server_uri').'/api/client_logout', [
            'headers' => [
                'Authorization' => 'Bearer '.$access_token,
                'Accept' => 'application/json',
            ],
        ]);

        return redirect(config('client_auth.server_uri').'/api/client_logout');
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
