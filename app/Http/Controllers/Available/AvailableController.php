<?php

namespace App\Http\Controllers\Available;

use App\Http\Controllers\Controller;
use App\Models\Accesse;
use App\Models\File;
use App\Models\Folder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AvailableController extends Controller
{
    public function index()
    {
        $accese_files = Accesse::with('file.user')
            ->with('file')
            ->where('user_id', Auth::id())
            ->where('folder_id',null)
            ->get();

        $data = [
            'files'=> $accese_files,
        ];

        return response()->json($data, 200);
    }

    public function show($id)
    {
        $files = File::with('user')
            ->where('user_id',Auth::id())
            ->where('folder_id', $id)
            ->where('status_id',2)
            ->get();
        $folders = Folder::with('user')
            ->where('user_id',Auth::id())
            ->where('parent_id', $id)
            ->where('status_id',2)
            ->get();

        $data = [
            'files'=> $files,
            'folders' => $folders,
        ];

        return response()->json($data, 200);
    }
}
