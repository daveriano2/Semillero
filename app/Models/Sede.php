<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    use HasFactory;
    protected $fillable =['Nombre'];
    
    public function turnos(){
        return $this->hasMany('App\Models\turno', 'id_Sede', 'id');

    }

    public function ingresos()
    {
        return $this->hasMany('App\Models\Ingreso', 'id_Sede', 'id');
    }
}
