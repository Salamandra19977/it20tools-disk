<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $guarded = [];

    public static function create(array $data):self
    {
        $file = new self();
        $file->name = $data['name'];
        $file->size = $data['size'];
        $file->extension = $data['extension'];
        $file->patch = $data['patch'];
        $file->user_id = $data['user_id'];
        $file->status_id = $data['status_id'];
        
        $file->save();
        // dd($file);
        return $file;
    }
    
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
