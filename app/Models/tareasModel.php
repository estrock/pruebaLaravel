<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tareasModel extends Model
{
    use HasFactory;
    protected $table = 'tareas';
    protected $fillable = [
        'nombreTarea',
        'idDepartamentoFK',
        'cantidadPersonal'
    ];
}
