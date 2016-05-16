<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
        'album_id', 'album_titulo', 'album_fechapublicacion',
    ];

    protected $table = 'albumes';

    protected $primaryKey = 'album_id';

    public function artistas(){
        return $this->hasMany('App\\Artista',$this->primaryKey);
    }
}
