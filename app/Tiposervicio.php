<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiposervicio extends Model
{
    protected $table = 'tiposervicios';
    protected $primaryKey='idTiposervicio';
    protected $fillable=['idTiposervicio','nombre'];
}
