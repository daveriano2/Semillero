<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use Illuminate\Http\Request;

class CiudadController extends Controller
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
        $ciudads = Ciudad::paginate(5);
        return view('ciudads.index',compact('ciudads'));
    }

   
    public function create()
    {
        return view('ciudads.crear');
    }

    
    public function store(Request $request)
    {
        request()->validate([

            'Nombre' =>'required',

        ]);

        Ciudad::create($request->all());
        return redirect()-> route('ciudads.index');
    }

    
    public function show(Ciudad $ciudad)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function edit(Ciudad $ciudad)
    {
        return view('ciudads.editar', compact('ciudad'));
    }

   
    public function update(Request $request, Ciudad $ciudad)
    {
        request()->validate([
            'Nombre' =>'required',
        ]);
        Ciudad::create($request->all());
        return redirect()-> route('ciudads.index');
    }

    
    public function destroy(Ciudad $ciudad)
    {
        $ciudad->delete();
        return redirect()->route('ciudads.index');
    }
}
