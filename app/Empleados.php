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

    //relacion 1 a m con cliente
    public function clientes(){
        return $this->hasMany('App\Cliente', 'SupportRepId');
    }

     //relacion 1 a m con acturas atraves del cliente
     public function facturas(){
        return $this->hasManyThrough('App\Factura',
                                     'App\Cliente',
                                     'SupportRepId',//FK clave foranea del abuelo en elpapa
                                     'CustomerId',
                                     'EmployeeId',// clave primaria del abuelo
                                     'CustomerId');// clave primaria delabuelo
    }
}


