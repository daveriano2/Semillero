<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class turno extends Model
{

    static $rules = [
		'Fecha_Inicio' => 'required',
		'Fecha_Final' => 'required',
		'Celular' => 'required',
    ];

    use HasFactory;
    protected $fillable =['id_User','id_Ciudad', 'id_Sede', 'id_Horario','Fecha_Inicio','Fecha_Final','Celular'];

    public function users(){
        return $this->hasOne('App\Models\User', 'id', 'id_User');
    }

    public function ciudads(){
        return $this->hasOne('App\Models\Ciudad', 'id', 'id_Ciudad');
    }

    public function sedes(){
        return $this->hasOne('App\Models\Sede', 'id', 'id_Sede');
    }

    public function horarios(){
        return $this->hasOne('App\Models\Horario', 'id', 'id_Horario');
    }
}
