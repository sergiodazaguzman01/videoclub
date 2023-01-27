@extends('layouts.main', ['activePage' => 'peliculas', 'titlePage' => 'Lista de peliculas'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Lista de Peliculas</h4>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 text-right">
                                        <a href="{{route('peliculas.create')}}" class="btn btn-sm btn-facebook">ADD</a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>Nombre</th>
                                            <th>Lanzamineto</th>
                                            <th>Sinopsis</th>
                                            <th>Precio UN</th>
                                            <th>Genero</th>
                                            <th>Fecha Estreno</th>
                                            <th>Pelicula</th>
                                            <th class="text-rigth">Acciones</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($peliculas as $pelicula)
                                            <tr>
                                                <td>{{ $pelicula->nombre}}</td>
                                                <td>{{ $pelicula->lanzamiento}}</td>
                                                <td>{{ $pelicula->sinopsis}}</td>
                                                <td>{{ $pelicula->precio_unitario}}</td>
                                                <td>{{ $pelicula->genero}}</td>
                                                <td>{{ $pelicula->fecha_estreno}}</td>
                                                <td>
                                                    <img src="{{ asset($pelicula->image)}}" alt="hola" class="img-fluid img-thumbnail" width="80dp">
                                                </td>
                                                <td class="td-actions text-right">

                                                    <!-- Botton para ver el detalle de una persona -->
                                                    <a href="{{route('peliculas.show', $pelicula->id)}}" class="btn btn-info"> <i class="material-icons">person</i></a>

                                                    <!-- Botton para editar una persona -->
                                                    <a href="{{route('peliculas.edit', $pelicula->id)}}" class="btn btn-warning"> <i class="material-icons">edit</i></a>

                                                    <!-- Botton para eliminar una persona -->
                                                    <form action="{{ route('peliculas.delete', $pelicula->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Seguro?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" type="submit" rel="tooltip">
                                                            <i class="material-icons">close</i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="card-footer mr-auto">
                                {{ $peliculas->links() }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection