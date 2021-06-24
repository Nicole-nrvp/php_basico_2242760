<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    //vincular modelo a tabla
    protected $table="playlist";
    //Establecer la clave primaria para la entidad (por defcto: id)
    protected $primaryKey = "PlaylistId";
    //omitir campos
    public $timestamps = false;

    //relacion muchos a muchos (playlist ycancion)
    public function canciones(){
        //metodo modelos: belongsToMany
        //PARAMTROS

        return $this->belongsToMany('App\Cancion',
                                    'playlisttrack',
                                    'PlaylistId',
                                    'TrackId');
    }
}
