<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class turno extends Model
{
    use HasFactory;
    protected $fillable =['Fecha Inicio','Fecha Fin','Celular'];
}
