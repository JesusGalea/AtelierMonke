<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        
       
        return view('admin.usuarios.listado')->with('users', $users);
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['usuario'] = new User();
        return view('admin.usuarios.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserStoreRequest $request)
    {
     // Hemos pasado la validación y cogemos los datos validados
      $datosValidados = $request->safe()->except('password');

        // Cogemos el usuario y actualizamos los datos validados
        $usuario = User::findOrNew($request->id);
        $usuario->fill($datosValidados);

        // Si hemos introducido una contraseña, actualizamos hasheando
        if ($request->password) {
            $usuario->password = Hash::make($request->password);
        } 

        // Guardamos
        $usuario->save();

        // Notificamos
        session()->flash('status', 'success');
        session()->flash('item', 'Operación realizada correctamente.');
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = User::find($id);
        return view('admin.usuarios.listado')->with('users', $data);
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['usuario'] = User::findOrFail($id);
        return view('admin.usuarios.form', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);
        
        session()->flash('status', 'success');
        session()->flash('item', 'Usuario eliminado correctamente.');
        return redirect()->route('users.index');
    }
}
