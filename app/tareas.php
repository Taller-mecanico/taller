<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tareas extends Model
{
    protected $fillable = [
        'id_empleado',
        'descripcion_tarea',
        'estado_tarea',
        'id_cliente',
        'titulo_tarea',
        'precio'];
}
