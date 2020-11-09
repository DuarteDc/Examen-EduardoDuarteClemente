<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $tabla='cliente';
    protected $guarded=['id'];
    protected $fillable=['nombre'];
}
