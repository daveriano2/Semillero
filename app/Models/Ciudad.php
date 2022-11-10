<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;
    protected $fillable =['Nombre'];



    public function turnos()
    {
        return $this->hasMany('App\Models\Turno', 'id_Ciudad', 'id');
    }
    public function ingresos()
    {
        return $this->hasMany('App\Models\Ingreso', 'id_Ciudad', 'id');
    }

   
}


