<?php

namespace App\Http\Controllers;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Arr;
use App\Models\Ingreso;
use Illuminate\Http\Request;
use App\Models\Ciudad;
use App\Models\Sede;
use App\Models\User;


class IngresoController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:Ver-novedad|Crear-novedad|Editar-rol|Borrar-novedad',['only'=>['index','show']]);
        $this->middleware('permission:Crear-novedad',['only'=>['create', 'store','show']]);
        $this->middleware('permission:Editar-novedad',['only'=>['edit', 'update','show']]);
        $this->middleware('permission:Borrar-novedad',['only'=>['destroy']]);
    }
    public function index()
    {
        $ingresos = Ingreso::paginate();

        return view('ingreso.index', compact('ingresos'))
            ->with('i', (request()->input('page', 1) - 1) * $ingresos->perPage());
    }

    
    public function create()
    {
        $ingreso = new Ingreso();
       
        $users=User::pluck('name' , 'id');    
        $sedes=Sede::pluck('Nombre' , 'id');
        $ciudads=Ciudad::pluck('Nombre' , 'id');

        return view('ingreso.create', compact('ingreso','ciudads','sedes','users'));
        return dd();
        
    }

    
    public function store(Request $request)
    {
        request()->validate(Ingreso::$rules);

        $ingreso = Ingreso::create($request->all());

        return redirect()->route('ingresos.index')
            ->with('success', 'Ingreso created successfully.');
    }

    
    public function show($id)
    {
        $ingreso = Ingreso::find($id);
        

        return view('ingreso.show', compact('ingreso'));
    }

    
    public function edit($id)
    {
        $ingreso = Ingreso::find($id);
        $ciudads=Ciudad::pluck('Nombre' , 'id');
        $sedes=Sede::pluck('Nombre' , 'id');
        $users=User::pluck('name' , 'id');    

        return view('ingreso.edit', compact('ingreso','ciudads','sedes','users'));
    }

    
    public function update(Request $request, Ingreso $ingreso)
    {
        request()->validate(Ingreso::$rules);

        $ingreso->update($request->all());

        return redirect()->route('ingresos.index')
            ->with('success', 'Ingreso updated successfully');
    }

    
    public function destroy($id)
    {
        $ingreso = Ingreso::find($id)->delete();

        return redirect()->route('ingresos.index')
            ->with('success', 'Ingreso deleted successfully');
    }
}
