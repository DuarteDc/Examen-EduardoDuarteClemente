<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_factura extends Model
{
    protected $tabla='detalle_factura';
    protected $guarded=['num_detalle'];
    protected $fillable=['numero_factura', 'producto_id', 'cantidad'];
}
