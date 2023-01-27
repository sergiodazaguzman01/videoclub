<?php

namespace App\Http\Controllers;

use App\Models\Alquiler;
use App\Models\Pelicula;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlquilerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Display a listing of the resource.
    // public function index()
    // {
    //     //declarate variable y llamamos el modelo USER. y el paginate sirve para paginar cunado hallan mas de 5 registros
    //     $alquilers = Alquiler::paginate(5);
    //     $usuarios = User::all();
    //     $peliculas = Pelicula::all();
    //     //retorna una vista llamada index. y la variable users de arriba la mandamos con el compact para poderla usar en la vista
    //     return view('alquiler.index', compact('alquilers','usuarios', 'peliculas'));
    // }
    //Funcion que retorna una consulta
    public function index()
    {
        $alquileres = DB::table('alquilers')
            ->select('users.name', 'peliculas.nombre', 'peliculas.image', 'alquilers.id', 'alquilers.fecha_inicio', 'alquilers.fecha_fin', 'alquilers.valor_pelicula')
            ->join('users', 'alquilers.user_id', "=", 'users.id')
            ->join('peliculas', 'alquilers.pelicula_id', "=", 'peliculas.id')
            ->get();
        return view('alquiler.index', ['alquileres' => $alquileres]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * function to redirect a view create alquiler
     */
    public function create(Alquiler $alquiler, Pelicula $pelicula)
    {

        $usuarios = User::all();
        $peliculas = Pelicula::all();
        //retorna la vista create.blade.php
        return view('alquiler.create')->with(compact('alquiler', 'usuarios', 'peliculas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //fuction to do a create a new user and save in bd
    public function store(Request $request)
    {
        //we ask for all the fields of the alquiler model
        $alquiler = Alquiler::create(
            $request->only('valor_pelicula', 'fecha_inicio', 'fecha_fin', 'user_id', 'pelicula_id')

        );
        //we redirect to the same page
        // return redirect()->route('users.show', $user->id);
        return redirect()->back();
        //return redirect()->route('alquiler.index');
    }


    public function show(Alquiler $alqui)
    {
        // $alquileres = DB::table('alquilers')
        //     ->select('users.name', 'peliculas.nombre', 'peliculas.image', 'alquilers.id', 'alquilers.fecha_inicio', 'alquilers.fecha_fin', 'alquilers.valor_pelicula')
        //     ->join('users', 'alquilers.user_id', "=", 'users.id')
        //     ->join('peliculas', 'alquilers.pelicula_id', "=", 'peliculas.id')
        //     ->get();
        return view('alquiler.show', compact('alqui'));
    }

    public function edit(Alquiler $alqui)
    {
        //retornamos la vista de editar
        return view('alquiler.edit', compact('alqui'));
    }

    public function update(Request $request, Alquiler $alquileres)
    {
        $data = $request->only('user_id', 'pelicula_id', 'fecha_inicio', 'fecha_fin', 'valor_pelicula');

        $alquileres->update($data);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alquiler $alquiler)
    {
        $alquiler->delete();
        return back();
    }


    public function encontrarPelicula(Request $request)
    {
        //$request->id here is the id of our chosen option id
        $data = Pelicula::select('lanzamiento', 'id', 'precio_unitario')->where('id', $request->id)->take(100)->get();
        return response()->json($data); //then sent this data to ajax success

    }
}
