<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{

    protected $fillable = [
        'artista_id','album_id', 'artista_nombre', 'artista_rol',
    ];

    protected $table = 'artistas';

    protected $primaryKey = 'artista_id';

    public function artistas(){
        return $this->belongsTo('Artistas','album_id');
    }
}
