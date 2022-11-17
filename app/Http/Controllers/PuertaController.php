<?php

namespace App\Http\Controllers;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Arr;
use App\Models\turno;
use Illuminate\Http\Request;


class PuertaController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:Ver-rol|Crear-rol|Editar-rol|Borrar-rol',['only'=>['index']]);
        $this->middleware('permission: Crear-rol ',['only'=>['create', 'store']]);
        $this->middleware('permission: Editar-rol ',['only'=>['edit', 'update']]);
        $this->middleware('permission: Borrar-rol ',['only'=>['destroy']]);
    }
    
    public function index(turno $turno)
        {
            $turnos = Turno::where ("id_Sede","=",2)->paginate(5);
            return view('buro.index',compact('turnos'));
        }
}
