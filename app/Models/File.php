<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    public function accesses()
    {
        return $this->hasMany('App\Models\Accesse');
    }

    public function cover()
    {
        return $this->belongsTo('App\Models\Cover');
    }

    public function folder()
    {
        return $this->belongsTo('App\Models\Folder');
    }

    public function liks()
    {
        return $this->hasMany('App\Models\Link');
    }

    public function statuse()
    {
        return $this->belongsTo('App\Models\Statuse');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }


}
