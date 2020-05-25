<?php

namespace App\Http\Controllers\Basket;

use App\Http\Controllers\Controller;
use App\Models\File;
use App\Models\Folder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
    public function index()
    {
        $files = File::with('user')
            ->where('user_id',Auth::id())
            ->where('folder_id', null)
            ->where('status_id', 2)
            ->get();
        $folders = Folder::with('user')
            ->where('user_id',Auth::id())
            ->where('status_id', 2)
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
            ->where('user_id',Auth::id())
            ->where('folder_id', $id)
            ->where('status_id', 2)
            ->get();
        $folders = Folder::with('user')
            ->where('user_id',Auth::id())
            ->where('parent_id', $id)
            ->where('status_id', 2)
            ->get();

        $data = [
            'files'=> $files,
            'folders' => $folders,
        ];

        return response()->json($data, 200);
    }

    public function update(Request $request)
    {
        $arrFiles = $request->files;
        $arrFolders = $request->folders;

        foreach($arrFiles as $key => $arrFile) {
            $arrFile = File::findOrFail($arrFile['id']);
            $arrFile->status_id = 1;
            $arrFile->save();
        }
        dd($request);
        return response($this->index(), Response::HTTP_OK);
    }

}
