@extends('layouts.main', ['activePage' => 'peliculas', 'titlePage' => 'Nueva Pelicula'])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!--en el formulario llamamos el metodo desde la rout-->
                <form action="{{ route('peliculas.update', $pelicula->id) }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                    <!-- FORMA DE SEGURIDAD DE LARAVEL @CSRF -->
                    @csrf
                    <!-- //hiden mandamas el metodo put  -->
                    @method('PUT')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">REGISTRO DE </h4>
                            <p class="card-category">Peliculas</p>

                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="{{route('peliculas.index')}}" class="btn btn-primary">Volver</a>
                                </div>
                            </div>
                            <div class="row">
                                <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="nombre" placeholder="Ingrese su nombre" value="{{$pelicula->nombre}}" autofocus required>
                                </div>
                            </div>
                            <div class="row">
                                <label for="sinopsis" class="col-sm-2 col-form-label">Sinopsis</label>
                                <div class="col-sm-7">
                                    <textarea type="text" class="form-control" name="sinopsis" value="{{$pelicula->sinopsis}}" rows="2" autofocus required placeholder="Detalle de la pelicula">{{$pelicula->sinopsis}}</textarea>
                                    <br>
                                </div>
                            </div>
                            <div class="row">
                                <label for="precio_unitario" class="col-sm-2 col-form-label">Precio</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="precio_unitario" placeholder="Precio" value="{{$pelicula->precio_unitario}}" autofocus required>
                                </div>
                            </div>
                            <div class="row">
                                <label for="genero" class="col-sm-2 col-form-label">Genero</label>
                                <div class="col-sm-7">
                                    <select name="genero" class="form-control" require>
                                        <option value="{{$pelicula->genero}}">{{$pelicula->genero}}</option>
                                        <option value="accion">Accion</option>
                                        <option value="terror">Terror</option>
                                        <option value="historia">Historia</option>
                                        <option value="thriller">Thriller</option>
                                        <option value="drama">Drama</option>
                                        <option value="familiar">Familiar</option>
                                        <option value="musical">Musical</option>
                                        <option value="documental">Documental</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <label for="fecha_estreno" class="col-sm-2 col-form-label">Fecha Estreno</label>
                                <div class="col-sm-7">
                                    <input type="date" class="form-control" name="fecha_estreno" value="{{$pelicula->fecha_estreno}}" placeholder="Precio" autofocus required>
                                </div>
                            </div>
                            <div class="row">
                                <label for="image" class="col-sm-2 col-form-label">Imagen</label>
                                <div class="col-sm-7">
                                    <input type="file" class="form-control" value="{{$pelicula->image}}" name="image">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-7">
                                    <input type="hidden" class="form-control" name="estado" value="1" autofocus required>
                                </div>
                            </div>
                            <div class="row">
                                <label for="lanzamiento" class="col-sm-2 col-form-label">Genero</label>
                                <div class="col-sm-7">
                                    <select name="lanzamiento" class="form-control" require>
                                        <option value="{{$pelicula->lanzamiento}}" selected>{{$pelicula->lanzamiento}}</option>
                                        <option value="Nuevos lanzamientos">Nuevos Lanzamientos</option>
                                        <option value="Peliculas normales">Peliculas Normales</option>
                                        <option value="Peliculas viejas">Peliculas Viejas</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- FOOTHER -->
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection