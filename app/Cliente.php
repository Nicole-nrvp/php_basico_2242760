<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //vincular modelo a tabla
    protected $table="customer";
    //Establecer la clave primaria para la entidad (por defcto: id)
    protected $primaryKey = "CustomerId";
    //omitir campos
    public $timestamps = false;
}


