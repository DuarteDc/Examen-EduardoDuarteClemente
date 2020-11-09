<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_facturas extends Model
{
    protected $tabla='detalle_facturas';
    protected $guarded=['id'];
    protected $fillable=['factura_id', 'producto_id', 'catidad'];


    public function facturas()
    {
        return $this->belongsTo(Facturas::class);
    }
    public function productos()
    {
        return $this->belongsTo(Productos::class);
    }
}
