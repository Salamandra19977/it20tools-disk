<?php

namespace App\Http\Controllers\Basket;

use App\Http\Controllers\Controller;
use App\Models\File;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function index()
    {
        $files = File::with('user')
            ->where('user_id',Auth::id())
            ->where('folder_id', null)
            ->get();
        $folders = Folder::with('user')
            ->where('user_id',Auth::id())
            ->where('parent_id', null)
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
            ->get();
        $folders = Folder::with('user')
            ->where('user_id',Auth::id())
            ->where('parent_id', $id)
            ->get();

        $data = [
            'files'=> $files,
            'folders' => $folders,
        ];

        return response()->json($data, 200);
    }
}