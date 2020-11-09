<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facturas extends Model
{
    protected $tabla='facturas';
    protected $guarded=['numero'];
    protected $fillable=['fecha', 'cliente_id'];


    public function clientes()
    {
        return $this->belongsTo(Clientes::class);
    }
    public function detalle_facturas()
    {
        return $this->hasMany(Detalle_facturas::class);
    }
}
