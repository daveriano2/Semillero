<?php

namespace App\Http\Controllers;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Arr;
use App\Models\turno;
use Illuminate\Http\Request;
use App\Models\Ciudad;
use App\Models\Sede;
use App\Models\User;
use App\Models\Horario;


class TurnoController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:Ver-rol|Crear-rol|Editar-rol|Borrar-rol',['only'=>['index']]);
        $this->middleware('permission: Crear-rol ',['only'=>['create', 'store']]);
        $this->middleware('permission: Editar-rol ',['only'=>['edit', 'update']]);
        $this->middleware('permission: Borrar-rol ',['only'=>['destroy']]);
    }
    public function index()
    {
        $turnos = Turno::paginate(5);
        return view('turnos.index',compact('turnos'));
    }

    
    public function create()
    {
        $turno = new Turno();
        $ciudads= Ciudad::pluck('Nombre' , 'id');
        $sedes= Sede::pluck('Nombre' , 'id');
        $users= User::pluck('name' , 'id');    
        $horarios= Horario::pluck('Hora_Inicio' , 'id');    
        return view('turnos.crear',compact('turno','users','ciudads','sedes','horarios'))->with('success', 'Ingreso Registrado.');
    }

    
    public function store(Request $request)
    {
        request()->validate(Turno::$rules);

        $turno = Turno::create($request->all());

        return redirect()->route('turnos.index')
            ->with('success', 'Turno created successfully.');
        
      }

  
    public function show(turno $turno)
    {
        
    }

    
    public function edit(turno $turno)
    {
        $ciudads=Ciudad::pluck('Nombre' , 'id');
        $sedes=Sede::pluck('Nombre' , 'id');
        $users=User::pluck('name' , 'id');    
        $horarios=Horario::pluck('Hora_Inicio' , 'id');    
        return view('turnos.editar',compact('turno','users','ciudads','sedes','horarios'));
       
    }

    
    public function update(Request $request, turno $turno)
    {

        
        request()->validate(turno::$rules);

        $turno->update($request->all());

        return redirect()->route('turnos.index')
            ->with('success', 'Turno updated successfully');
    }

    
    public function destroy($id)
    {
        $turno = Turno::find($id)->delete();

        return redirect()->route('turnos.index')
            ->with('success', 'Turno deleted successfully');
    }
}
