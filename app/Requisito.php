<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requisito extends Model
{
    protected $table = 'requisitos';
    protected $primaryKey = 'idRequisito';
    protected $fillable=[
        'idRequisito','idTiposervicio','nombre','observaciones'
    ];
}

