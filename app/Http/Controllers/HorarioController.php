<?php

namespace App\Http\Controllers;


use App\Models\Horario;
use Illuminate\Http\Request;

class HorarioController extends Controller
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
        $horarios = Horario::paginate(5);
        return view('horarios.index',compact('horarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('horarios.crear');
    }

 
    public function store(Request $request)
    {
        request()->validate([

            'Hora_Inicio' =>'required',
            'Hora_Fin' =>'required',

        ]);

        Horario::create($request->all());
        return redirect()-> route('horarios.index');
    }
    

    
  

   
    public function edit(Horario $horario)
    {
        return view('horarios.editar', compact('horario'));
    }

 
    public function update(Request $request, Horario $horario)
    {
        request()->validate([

            'Hora_Inicio' =>'required',
            'Hora_Fin' =>'required',

        ]);

        Horario::create($request->all());
        return redirect()-> route('horarios.index');    
    }

    
    public function destroy(Horario $horario)
    {
        $horario->delete();
        return redirect()->route('horarios.index');
    }
}
