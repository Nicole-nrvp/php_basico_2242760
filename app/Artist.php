<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    //vincular modelo a tabla
    protected $table="artist";
    //Establecer la clave primaria para la entidad (por defcto: id)
    protected $primaryKey = "ArtistId";
    //omitir campos
    public $timestamps = false;
}
