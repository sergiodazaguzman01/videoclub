<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    //Display a listing of the resource.
    public function index()
    {
        //declarate variable y llamamos el modelo USER. y el paginate sirve para paginar cunado hallan mas de 5 registros
        $users = User::paginate(5);
        //retorna una vista llamada index. y la variable users de arriba la mandamos con el compact para poderla usar en la vista
        return view('users.index', compact('users'));
    }

    //function to redirect a view create user
    public function create()
    {
        //retorna la vista create.blade.php
        return view('users.create');
    }

    //fuction to do a create a new user and save in bd
    public function store(Request $request)
    {
        //we ask for all the fields of the user model
        $user = User::create(
            $request->only('name', 'email')
                + [
                    'password' => bcrypt($request->input('password')),
                ]
        );
        //we redirect to the same page
        return redirect()->route('users.show', $user->id);
    }

    //function to redirect a view user especifc
    public function show(User $user)
    {
        //retornamos la vista que queremos ver y luego le mandamos la variable para ver el dato de solo un regisytro
        return view('users.show', compact('user'));
    }

    //function to redirect a view edit user
    public function edit(User $user)
    {
        //retornamos la vista de editar
        return view('users.edit', compact('user'));
    }


    //function para modificar el registro es casi lo mismo que el create solo que le mandamos el id por parametro para saber que
    //usuario modificar
    public function update(Request $request, User $user)
    {

        $data = $request->only('name', 'email');

        $password = $request->input('password');

        if ($password) {
            $data['password'] = bcrypt($password);
        }
        $user->update($data);
        return redirect()->route('users.show', $user->id);
    }

    // funcion para eliminar, directamente retorna a la misma vista
    public function destroy(User $user)
    {
        $user->delete();
        return back();
    }
}
