<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disco extends Model
{
    //vincular modelo a tabla
    protected $table="album";
    //Establecer la clave primaria para la entidad (por defcto: id)
    protected $primaryKey = "AlbumId";
    //omitir campos
    public $timestamps = false;

    //Inverso de la relacion muchos a 1
    public function artista(){
        //belongsTo:relacion m a1
        return $this->belongsTo('App\Artista', 'ArtistId');
    }

}
