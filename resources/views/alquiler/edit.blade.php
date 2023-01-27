@extends('layouts.main', ['activePage' => 'Reserva', 'titlePage' => 'Edita Alquiler'])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!--en el formulario llamamos el metodo desde la rout-->
                <form action="{{ route('alquilers.update', $alquiler->id) }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                    <!-- FORMA DE SEGURIDAD DE LARAVEL @CSRF -->
                    @csrf
                    <!-- //hiden mandamos el metodo put  -->
                    @method('PUT')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">ALQUILER</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="{{route('alquiler.index')}}" class="btn btn-primary">Volver</a>
                                </div>
                            </div>

                            <!--------------------CARGA EL NOMBRE DE LOS USUARIOS PARA REALIZAR EL ALQUILER------------------>
                            <div class="row">
                                <label for="user_id" class="col-sm-2 col-form-label">Cliente</label>
                                <div class="col-sm-7">
                                    <select name="user_id" class="form-control selectpicker" data-mdb-filter="true" require>
                                        <option value="" selected>Seleccione al cliente</option>
                                        @foreach ($usuarios as $user)
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!------------------------------------------------>

                            <!--------------------CARGA EL NOMBRE DE LAS PELICULAS PARA REALIZAR EL ALQUILER------------------>

                            <div class="row">
                                <label for="pelicula_id" class="col-sm-2 col-form-label">Pelicula</label>
                                <div class="col-sm-7">
                                    <select name="pelicula_id" class="form-control selectpicker" data-mdb-filter="true" require>
                                        <option value="" selected>Seleccione la pelicula</option>
                                        @foreach ($peliculas as $peli)
                                        <option value="{{$peli->id}}">{{$peli->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!------------------------------------------------>

                            <div class="row">
                                <label for="fecha_inicio" class="col-sm-2 col-form-label">Fecha Prestamo</label>
                                <div class="col-sm-7">
                                    <input type="date" class="form-control" name="fecha_inicio" placeholder="Precio" autofocus required>
                                </div>
                            </div>
                            <div class="row">
                                <label for="fecha_fin" class="col-sm-2 col-form-label">Fecha Devolucion</label>
                                <div class="col-sm-7">
                                    <input type="date" class="form-control" name="fecha_fin" placeholder="Precio" autofocus required>
                                </div>
                            </div>
                            <div class="row">
                                <label for="valor_pelicula" class="col-sm-2 col-form-label">Total</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="valor_pelicula" placeholder="Precio total" autofocus required>
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