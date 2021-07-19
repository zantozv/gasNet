<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = 'servicios';
    protected $primaryKey='idServicio';
    protected $fillable=[
        'idServicio',
        'idUsuario',
        'idCiudad',
        'idTiposervicio',
        'direccion',
        'descripcion',
        'valor',
        'estado'
];
}
