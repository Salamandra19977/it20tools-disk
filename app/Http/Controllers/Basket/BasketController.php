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
            ->where('status_id', 2)
            ->get();
        $folders = Folder::with('user')
            ->where('user_id',Auth::id())
            ->where('parent_id', null)
            ->where('status_id', 2)
            ->get();

        $data = [
            'files'=> $files,
            'folders' => $folders
        ];

        return response()->json($data, 200);
    }
    //перемещение файла/папки в корзину
    public function removeToBasket()
    {

    }
    //удаление файла/папки полность
    public function removeFromBasket()
    {

    }



}
