<?php

namespace App\Http\Controllers\Disk;

use App\Http\Controllers\Controller;
use App\Models\File;
use App\Models\Folder;
use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            ->where('user_id',Auth::id())
            ->where('folder_id', $id)
            ->where('status_id',1)
            ->get();
        $folders = Folder::with('user')
            ->where('user_id',Auth::id())
            ->where('parent_id', $id)
            ->where('status_id',1)
            ->get();

        $data = [
            'files'=> $files,
            'folders' => $folders,
        ];

        return response()->json($data, 200);
    }

    public function addLinks(Request $request)
    {
        $file = File::where('id', $request->file_id) -> first();

        $link = Link::create([
            'patch' => md5($file->name),
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

        return view('link', compact('link'));
    }

}
