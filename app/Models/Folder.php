<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    public function files()
    {
        return $this->hasMany('App\Models\File');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
