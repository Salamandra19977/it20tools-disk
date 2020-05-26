<?php

namespace App\Http\Controllers\Basket;

use App\Http\Controllers\Controller;
use App\Models\File;
use App\Models\Folder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;

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
        $arrFiles = $request["files"];
        $arrFolders = $request["folders"];

        foreach($arrFiles as $value) {
            $arrFile = File::findOrFail($value["id"]);
            $arrFile->status_id = 1;
            $arrFile->save();
        }

        foreach($arrFolders as $value) {
            $arrFolder = Folder::findOrFail($value["id"]);
            $arrFolder->status_id = 1;
            $arrFolder->save();
        }

        return $this->index();
    }

    public function delete(Request $request)
    {
        $arrFiles = $request["files"];
        $arrFolders = $request["folders"];
        foreach($arrFiles as $value) {
            $arrFile = File::findOrFail($value["id"]);
            $missing = Storage::disk('files')->missing($arrFile->patch);
            Storage::disk('files')->delete($arrFile->patch);
            if($missing) {
                $arrFile->delete();
            }
        }
        foreach($arrFolders as $value) {
            $arrFolder = Folder::findOrFail($value["id"]);
            $missing = Storage::disk('files')->missing($arrFile->patch);
            Storage::disk('files')->delete($arrFolder->patch);
            if($missing) {
                $arrFolder->delete();
            }
        }

        return $this->index();
    }
}
