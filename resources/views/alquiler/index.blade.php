@extends('layouts.main', ['activePage' => 'Reserva', 'titlePage' => 'Alquileres activos'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Lista de alquileres</h4>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 text-right">
                                        <a href="{{route('alquilers.create')}}" class="btn btn-sm btn-facebook">ADD</a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>Cliente</th>
                                            <th colspan="2">Pelicula</th>
                                            <th>Fecha prestamo</th>
                                            <th>Fecha devolucion</th>
                                            <th>Valor Total</th>
                                            <th class="text-rigth">Action</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                @foreach ($alquileres as $alqui)
                                                <td>{{ $alqui->name}}</td>
                                                <td>
                                                    <img src="{{ asset($alqui->image)}}" alt="hola" class="img-fluid img-thumbnail" width="80dp">
                                                </td>
                                                <td>{{ $alqui->nombre}}</td>
                                                <td>{{ $alqui->fecha_inicio}}</td>
                                                <td>{{ $alqui->fecha_fin}}</td>
                                                <td>{{ $alqui->valor_pelicula}}</td>
                                                <td class="td-actions text-right">

                                                    <!-- Botton para ver el detalle de una alquile -->
                                                    <a href="{{route('alquilers.show', $alqui->id)}}" class="btn btn-info"> <i class="material-icons">person</i></a>

                                                    <!-- Botton para editar una alquiler -->
                                                    
                                                    <!-- Botton para eliminar un ALQUILERR -->
                                                    <form action="{{ route('alquilers.delete', $alqui->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Seguro?')">
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


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection