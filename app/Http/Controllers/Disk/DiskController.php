<?php

namespace App\Http\Controllers\Disk;

use App\Http\Controllers\Controller;
use App\Models\Accesse;
use App\Models\File;
use App\Models\Folder;
use App\Models\Link;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Files\FileController;


class DiskController extends Controller
{
    public function index()
    {
        $files = File::with('user')
            ->with('link')
            ->where('user_id',Auth::id())
            ->where('folder_id', null)
            ->where('status_id', '!=' , 2)
            ->get();

        $folders = Folder::with('user')
            ->where('user_id',Auth::id())
            ->where('parent_id', null)
            ->where('status_id', '!=' , 2)
            ->get();

        $data = [
            'files'=> $files,
            'folders' => $folders
        ];

        return response()->json($data, 200);
    }

    public function show($id)
    {
        $files = File::with('user')
            ->where('user_id', Auth::id())
            ->where('folder_id', $id)
            ->where('status_id',1)
            ->get();
        $folders = Folder::with('user')
            ->where('user_id', Auth::id())
            ->where('parent_id', $id)
            ->where('status_id',1)
            ->get();

        $data = [
            'files'=> $files,
            'folders' => $folders,
        ];

        return response()->json($data, 200);
    }

    public function upload(Request $request)
    {   
        $data = [];
        $userId = Auth::user()->id;
        $item = $request->file;

        $fileOriginalName = $item->getClientOriginalName();   
        $fileName = pathinfo($fileOriginalName, PATHINFO_FILENAME);


        $data['name'] = $fileName;
        $data['size'] = $item->getSize();
        $data['extension'] = $item->extension();
        $data['patch'] = $item->store('/'.$userId);
        $data['user_id'] =  Auth::user()->id;
        $data['status_id'] = 1;

        $file = File::create( $data );

    }

    public function addLinks(Request $request)
    {
        $file = File::where('id', $request->file_id) -> first();

        $link = Link::create([
            'patch' => md5($file->name.$file->id),
            'folder_id' => null,
            'file_id' => $request->file_id,
        ]);

        if($request->curent_folder == null) {
            return $this->index();
        }

        return $this->show($request->curent_folder);
    }

    public function removeLinks(Request $request)
    {
        $link = Link::where("file_id",$request->file_id)->first();
        $link->delete();

        if($request->curent_folder == null) {
            return $this->index();
        }

        return $this->show($request->curent_folder);
    }

    public function showFileLink($patch)
    {
        $link = Link::where("patch", $patch)->first();
        if($link) {
            $file = File::where("id",$link->file_id)->first();

            return view('disk.link', compact('file'));
        }

        return view('disk.link');
    }

    public function showAccesses($id)
    {
        $accesses = Accesse::with('user')->where('file_id',$id)->get();

        return response()->json($accesses, 200);
    }

    public function removeAccesses($id)
    {
        $accesse = Accesse::with('user')->where('id',$id)->first();
        $accesse->delete();
        $accesses = Accesse::with('user')->where('id',$id)->get();

        return response()->json($accesses, 200);
    }

    public function addAccesses(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if($user) {
            $accesse = Accesse::create([
                'folder_id' => null,
                'user_id' => $user->id,
                'file_id' => $request->file_id,
            ]);

            return $this->showAccesses($request->file_id);
        }
        $message = "Пользователь не найден";
        return response()->json($message, 400);
    }
}
