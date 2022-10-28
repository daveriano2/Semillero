<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Arr;

class UsuarioController extends Controller
{
    
    public function index()
    {
        $usuarios = User::paginate(5);
        return view('usuarios.index',compact('usuarios'));
    }

  
    public function create()
    {
        $roles = Role::pluck('name', 'name')->all();
        return view('usuarios.crear',compact('roles'));

    }

    public function show(usuario $usuarios)
    {
        //
    }
     
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' =>' required',
            'email' =>'required|email|unique:users,email',
            'password' =>'required|same:confirm-password',
            'roles'=>'required'

        ]);

        $input = $request->all();
        $input ['password']= Hash::make($imput['password']);
        $user = User::create($input);
        $user->assignRole($request->input('roles'));
        return redirect()->route('usuarios.index');
    }

    
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole =$user->roles->pluck('name','name')->all();
        return view ('usuarios.editar',compact('user'));
    }

   
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' =>' required',
            'email' =>'required|email|unique:users,email,'.$id,
            'password' =>'same:confirm-password',
            'roles'=>'required'

        ]);

        $input = $request ->all();
        if(!empty($input['password'])){
            $input['password']=Hash::make($input['password']);

        }else{
            $input=Arr::except($input, array('password'));
        }

        $user= User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();
        $user->assignRole($request->input('roles'));
        return redirect()->route('usuarios.index');
    }

    public function destroy($id)
    {
         User::find($id)->delete();
         return redirect()->route('usuarios.index');
    }
}
