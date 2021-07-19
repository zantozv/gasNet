<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = 'ciudades';
    protected $fillable=['idCiudad','nombre'];
    protected $primaryKey='idCiudad';
}
