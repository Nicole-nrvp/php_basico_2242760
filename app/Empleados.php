<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    //vincular modelo a tabla
    protected $table="employee";
    //Establecer la clave primaria para la entidad (por defcto: id)
    protected $primaryKey = "EmployeeId";
    //omitir campos
    public $timestamps = false;
}


