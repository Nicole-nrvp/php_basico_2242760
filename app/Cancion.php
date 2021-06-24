<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cancion extends Model
{
    //vincular modelo a tabla
    protected $table="track";
    //Establecer la clave primaria para la entidad (por defcto: id)
    protected $primaryKey = "TrackId";
    //omitir campos
    public $timestamps = false;

}
