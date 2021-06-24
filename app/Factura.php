<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    //vincular modelo a tabla
    protected $table="invoice";
    //Establecer la clave primaria para la entidad (por defcto: id)
    protected $primaryKey = "InvoiceId";
    //omitir campos
    public $timestamps = false;

    //relacion de muchos a muchos entre fatura y canciones
    public function canciones(){
        //relacion MM: belongsToMany
        //PARAMETROS
        //1.MODELO A RELACIONAR
        //2. FK del presente modelo en la tabla pivot
        //3. FK de la tabla relacionada en la tabla pivote
        //4.
        return $this->belongsToMany('App\Cancion',
                                     'invoiceline',
                                     'InvoiceId',
                                     'TrackId');
    }
}
