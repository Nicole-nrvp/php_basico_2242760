<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Artista extends Model
{
    //vincular modelo a tabla
    protected $table="artist";
    //Establecer la clave primaria para la entidad (por defcto: id)
    protected $primaryKey = "ArtistId";
    //omitir campos
    public $timestamps = false;

    //DEFINIR RELACION ENTRE ARTISTA Y SUS ALBUNOS
    public function discos(){
        //has many: parametros

        //1. Modelo a relacionar
        //2. FK del modelo papa
        return $this->hasMany('App\Disco', 'ArtistId' );

    }

    //definir la  relaccion multitabla entre
    //artista y sus canciones
    public function canciones(){
        //hasManyThrough: Parametros:
        //1. Modelo Nieto
        //2. Modelo Papa
        //3. FK del Abuelo en el Papa
        //4. FK del Papa en el nieto
        //5. PK del Abuelo
        //6. PK del Papa
        return $this->hasManyThrough('App\Cancion',
                                    'App\Disco',
                                    'ArtistId',
                                    'AlbumId',
                                    'ArtistId',
                                    'AlbumId');
    }
}
