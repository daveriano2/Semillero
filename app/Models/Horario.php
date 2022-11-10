<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;
    protected $fillable =['Hora_Inicio', 'Hora_Fin' ];

    public function turnos(){
        return $this->hasMany('App\Models\turno', 'id_Horario', 'id');

    }
}
