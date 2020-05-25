<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
	public function childrenFolders()
    {
        return $this->hasMany(Folder::class)->with('folders');
    }

    public function folders()
    {
        return $this->hasMany(Folder::class);
    }

    public function parenFolder()
    {
    	return $this->belongsTo('App\Models\Folder', 'parent_id');
    }


    public function files()
    {
        return $this->hasMany('App\Models\File');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
