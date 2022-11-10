<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Ingreso
 *
 * @property $id
 * @property $id_User
 * @property $id_Ciudad
 * @property $id_Sede
 * @property $created_at
 * @property $updated_at
 *
 * @property Ciudad $ciudad
 * @property Sede $sede
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ingreso extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_User','id_Ciudad','id_Sede'];


    
    public function users(){
        return $this->hasOne('App\Models\User', 'id', 'id_User');
    }

    public function ciudads(){
        return $this->hasOne('App\Models\Ciudad', 'id', 'id_Ciudad');
    }

    public function sedes(){
        return $this->hasOne('App\Models\Sede', 'id', 'id_Sede');
    }

}
