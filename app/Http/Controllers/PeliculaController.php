<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    //Display a listing of the resource.
    // public function index()
    // {
    //     //declarate variable y llamamos el modelo PELICULA. y el paginate sirve para paginar cunado hallan mas de 5 registros
    //     $peliculas = Pelicula::paginate(5);
    //     //retorna una vista llamada index. y la variable users de arriba la mandamos con el compact para poderla usar en la vista
    //     return view('peliculas.index', compact('peliculas'));
    // }

    public function index()
    {
        $peliculas = Pelicula::paginate(5);

        return view('peliculas.index', compact('peliculas'))
            ->with('i', (request()->input('page', 1) - 1) * $peliculas->perPage());
    }

    //function to redirect a view create pelicula
    public function create()
    {
        //retorna la vista create.blade.php
        return view('peliculas.create');
    }

    //this method is used to save in the bd
    public function store(Request $request)
    {
        //we solubilize the field of the model Movie
        $newPelicula = new Pelicula();

        //Condition for storinf an image in the bd

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $destinationPath = 'img/books/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('image')->move($destinationPath, $filename);
            $newPelicula->image = $destinationPath . $filename;
        }

        //we send you the data that are written in the view
        $newPelicula->nombre = $request->nombre;
        $newPelicula->sinopsis = $request->sinopsis;
        $newPelicula->precio_unitario = $request->precio_unitario;
        $newPelicula->genero = $request->genero;
        $newPelicula->fecha_estreno = $request->fecha_estreno;
        $newPelicula->estado = $request->estado;
        $newPelicula->lanzamiento = $request->lanzamiento;

        //we call the save method
        $newPelicula->save();

        //when you save that you send the redirect action to the list viewer
        return redirect()->route('peliculas.index');
    }

    public function show(Pelicula $pelicula)
    {
        //retornamos la vista que queremos ver y luego le mandamos la variable para ver el dato de solo un regisytro
        return view('peliculas.show', compact('pelicula'));
    }

    //function to redirect a view edit 
    public function edit(Pelicula $pelicula)
    {
        //retornamos la vista de editar
        return view('peliculas.edit', compact('pelicula'));
    }


    //function para modificar el registro es casi lo mismo que el create solo que le mandamos el id por parametro para saber que
    //usuario modificar. Y si queremos cambiar la imagen para eso usamos el if
    public function update(Request $request, Pelicula $pelicula)
    {

        $data = $request->only('nombre', 'sinopsis', 'precio_unitario', 'genero', 'fecha_estreno','lanzamiento');

        $image = $request->input('image');

        if ($image) {
            $data['image'] = ($image);
        }
        $pelicula->update($data);
        return redirect()->route('peliculas.show', $pelicula->id);
    }


    // funcion para eliminar, directamente retorna a la misma vista
    public function destroy(Pelicula $pelicula)
    {
        $pelicula->delete();
        return back();
    }
}
