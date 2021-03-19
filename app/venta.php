<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
    //

    protected $table ='venta';
    protected $primarykey= 'id';
    public $timestamps= false;

        public $fillable=[
        'nombrecli',
        'tipo_comprobante',
        'impuesto',
        'total'
        ];  
}
