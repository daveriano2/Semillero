<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Extra
 *
 * @property $id
 * @property $Fecha_Actividad
 * @property $Hora_Inicio
 * @property $Hora_Fin
 * @property $Estado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Extra extends Model
{
    
    static $rules = [
		'Fecha_Actividad' => 'required',
		'Hora_Inicio' => 'required',
		'Hora_Fin' => 'required',
		'Estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Fecha_Actividad','Hora_Inicio','Hora_Fin','Estado'];



}
