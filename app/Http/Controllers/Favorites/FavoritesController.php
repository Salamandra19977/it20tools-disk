<?php

namespace App\Http\Controllers\Favorites;

use App\Http\Controllers\Controller;
use App\Models\File;
use App\Models\Folder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;

class FavoritesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $favoriteFiles = File::with('user')
            ->where('user_id', Auth::id())
            ->where('folder_id', null)
            ->where('status_id', 3)
            ->get();

        $favoriteFolders = Folder::with('user')
            ->where('user_id',Auth::id())
            ->where('folder_id', null)
            ->where('status_id', 3)
            ->get();

        $favorites = [
            'favoriteFolders' => $favoriteFolders,
            'favoriteFiles' => $favoriteFiles
        ];

        // dd($favorites);

        return response()->json($favorites, Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //itemsFavorite[0] = files
        //itemsFavorite[1] = folders
        $itemsFavorite = ($request->itemsFavorite);
        
        $selectedFavoriteFiles = ($itemsFavorite[0]);
        $selectedFavoriteFolders = ($itemsFavorite[1]);

        if (isset($request->file['id'])) {
            $favoriteFiles = File::findOrFail($request->file['id']);
            if ($favoriteFiles->status_id == 1) {
                $favoriteFiles->status_id = 3;
                $favoriteFiles->save();
                return response($this->index(), Response::HTTP_OK);
            }
            elseif ($favoriteFiles->status_id == 3) {
                $favoriteFiles->status_id = 1;
                $favoriteFiles->save();
                return response($this->index(), Response::HTTP_OK);
            }
        }
      
        if (isset($request->folder['id'])) {
            $favoriteFolders = Folder::findOrFail($request->folder['id']);
            if ($favoriteFolders->status_id == 1) {
                $favoriteFolders->status_id = 3;
                $favoriteFolders->save();
                return response($this->index(), Response::HTTP_OK);
            }
            elseif ($favoriteFolders->status_id == 3) {
                $favoriteFolders->status_id = 1;
                $favoriteFolders->save();
                return response($this->index(), Response::HTTP_OK);
            }
        }

        if ($itemsFavorite) {
            if ($selectedFavoriteFiles) {
                foreach ($selectedFavoriteFiles as $key => $selectedFavoriteFile) {   
                    $selectedFavoriteFile = File::findOrFail($selectedFavoriteFile['id']);
                    if ($selectedFavoriteFile->status_id == 1) {
                        $selectedFavoriteFile->status_id = 3;
                        $selectedFavoriteFile->save();
                    }
                    elseif ($selectedFavoriteFile->status_id == 3) {
                        $selectedFavoriteFile->status_id = 1;
                        $selectedFavoriteFile->save();
                    }
                }
            }
            if ($selectedFavoriteFolders) {
                foreach ($selectedFavoriteFolders as $key => $selectedFavoriteFolder) {   
                    $selectedFavoriteFolder = Folder::findOrFail($selectedFavoriteFolder['id']);
                    if ($selectedFavoriteFolder->status_id == 1) {
                        $selectedFavoriteFolder->status_id = 3;
                        $selectedFavoriteFolder->save();
                    }
                    elseif ($selectedFavoriteFolder->status_id == 3) {
                        $selectedFavoriteFolder->status_id = 1;
                        $selectedFavoriteFolder->save();
                    }
                }
            }
            return response($this->index(), Response::HTTP_OK);
        }       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
