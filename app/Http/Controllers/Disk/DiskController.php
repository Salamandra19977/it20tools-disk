<?php

namespace App\Http\Controllers\Disk;

use App\Http\Controllers\Controller;
use App\Models\File;
use App\Models\Folder;
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
            ->where('user_id', Auth::id())
            ->where('folder_id', null)
            ->where('status_id', '!=' , 2)
            ->get();

        $folders = Folder::with('user')
            ->where('user_id', Auth::id())
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

}
