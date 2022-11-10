<?php

namespace App\Http\Controllers;

use App\Models\Sede;
use Illuminate\Http\Request;

class SedeController extends Controller
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
        $sedes = Sede::paginate(5);
        return view('sedes.index',compact('sedes'));
    }

    public function create()
    {
        
        return view('sedes.crear');
    }

   
    public function store(Request $request)
    {
        request()->validate([

            'Nombre' =>'required',

        ]);

        Sede::create($request->all());
        return redirect()-> route('sedes.index');
    }

   
  

    
    public function edit(Sede $sede)
    {
        return view('sedes.editar', compact('sede'));
    }

   
    public function update(Request $request, Sede $sede)
    {
        request()->validate([
            'Nombre' =>'required',
        ]);
        Sede::create($request->all());
        return redirect()-> route('sedes.index');
    }

    public function destroy(Sede $sede)
    {
        $sede->delete();
        return redirect()->route('sedes.index');
    }
}
