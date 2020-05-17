<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Accesse extends Model
{
    public function folder()
    {
        return $this->belongsTo('App\Models\Folder');
    }

    public function file()
    {
        return $this->belongsTo('App\Models\File');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
