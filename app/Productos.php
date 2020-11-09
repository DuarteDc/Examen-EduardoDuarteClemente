<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $tabla='productos';
    protected $guarded=['id'];
    protected $fillable=['nombre', 'precio', 'stock'];


    public function detalle_facturas()
    {
        return $this->hasMany(Detalle_facturas::class);
    }
}
