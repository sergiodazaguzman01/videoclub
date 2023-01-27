<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="/js/prueba/app1.js"></script>
    <script src="/js/prueba/app1.js"></script>
    <script src="/js/prueba/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
</head>

<body>
    @extends('layouts.main', ['activePage' => 'Reserva', 'titlePage' => 'Nuevo Alquiler'])
    @section('content')



    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!--en el formulario llamamos el metodo desde la rout-->
                    <form action="{{ route('alquilers.store') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                        <!-- FORMA DE SEGURIDAD DE LARAVEL @CSRF -->
                        @csrf
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">ALQUILER</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 text-right">
                                        <a href="{{route('alquilers.index')}}" class="btn btn-primary">Volver</a>
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
                                        <select name="pelicula_id" id="id_peli" class="form-control selectpicker" data-mdb-filter="true" require>
                                            <option value="" selected>Seleccione la pelicula</option>
                                            @foreach ($peliculas as $peli)
                                            <option value="{{$peli->id}}">{{$peli->nombre}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!------------------------------------------------>
                                <div class="row">
                                    <label for="lanzamiento" class="col-sm-2 col-form-label" hidden>Lanzamiento</label>
                                    <div class="col-sm-7">
                                        <input type="text" id="lanzamiento" class="form-control" hidden name="lanzamiento" placeholder="Lanzamiento" autofocus required disabled>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="valor_unitario" class="col-sm-2 col-form-label" hidden>Valor Unitario</label>
                                    <div class="col-sm-7">
                                        <input type="text" id="valor_unitario" class="form-control" hidden name="valor_unitario" placeholder="Precio" autofocus required disabled>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="fecha_inicio" class="col-sm-2 col-form-label" >Fecha Prestamo</label>
                                    <div class="col-sm-7">
                                        <input type="date" class="form-control" id="fecini" name="fecha_inicio" placeholder="Precio" autofocus required>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="fecha_fin" class="col-sm-2 col-form-label">Fecha Devolucion</label>
                                    <div class="col-sm-7">
                                        <input type="date" class="form-control" id="fecfin" name="fecha_fin"  placeholder="Precio" autofocus required>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="valor_pelicula" class="col-sm-2 col-form-label"> Valor Total</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="total"  name="valor_pelicula" placeholder="Precio total" autofocus required readonly>
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

    <!-- y lo trate de hacer aca en la vista para ver si funcionaba  -->
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function(event) {
            $(document).on('change', '#id_peli', function() {

                // console.log("hmm its change");
                var cat_id = $(this).val();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'get',
                    url: "{{ url('encontrarPelicula') }}",
                    data: {
                        'id': cat_id
                    },
                    success: function(data) {
                        // console.log('success');

                        // console.log(data[0]['lanzamiento']);
                        // console.log(data[0]['precio_unitario']);

                        var lanza = document.getElementById('lanzamiento');
                        lanza.value = data[0]['lanzamiento'];

                        var lanza = document.getElementById('valor_unitario');
                        lanza.value = data[0]['precio_unitario'];

                    },
                    error: function() {
                        console.log('No entro a la funcion de leer los datos');
                    }
                });
            })

        });
    </script>
    @endsection
    < /body>

        < /html>