@extends('layouts.main', ['activePage' => 'peliculas', 'titlePage' => 'Lista de usuarios'])
@section('content')

<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <span class="card-title">DETALLE DE LA PELICULA</span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('peliculas.index') }}"> Volver</a>
                    </div>
                </div>



                <div class="col-md-12">
                    <div class="card card-user">
                        <div class="card-body">
                            <p class="card-text">
                            <div class="author">
                                <a href="#" class="d-flex">
                                    <img src="{{ asset($pelicula->image)}}" alt="hola" width="200dp">
                                    &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
                                    <h5 class="title mt-3">{{ $pelicula->sinopsis }}</h5>
                                </a><br>
                                <h4 class="d-flex">
                                    <b>Nombre:&#160;&#160;</b>
                                    <p class="description">
                                        {{ $pelicula->nombre }}
                                    </p>
                                </h4>

                                <h4 class="d-flex">
                                    <b>Lanzamiento:&#160;&#160;</b>
                                    <p class="description">
                                        {{ $pelicula->lanzamiento }}
                                    </p>
                                </h4>

                                <h5 class="d-flex">
                                    <b>GENERO:&#160;&#160;</b>
                                    <p class="description">
                                        {{ $pelicula->genero }}
                                    </p>
                                </h5>
                                <h5 class="d-flex">
                                    <b>FECHA ESTRENO:&#160;&#160;</b>
                                    <p class="description">
                                        {{ $pelicula->fecha_estreno }}
                                    </p>
                                </h5>

                                <h5 class="d-flex">
                                    <b>PRECIO:&#160;&#160;</b>
                                    <p class="description">
                                        {{ $pelicula->precio_unitario }}
                                    </p>
                                </h5>

                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="button-container">
                                <a href="{{route('peliculas.edit', $pelicula->id)}}" class="btn btn-sm btn-warning"> <i class="material-icons">edit</i></a>
                            </div>
                        </div>
                    </div>
                </div><!--end card user-->
            </div>
        </div>
    </div>
</section>
@endsection