<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/prueba/app1.js"></script>

</head>

<body>
    <!-- Aca manejamos toda la interfaz el sidebar, navbar, footer, y el content cuando un usuario es logueado -->
    @extends('layouts.main', ['activePage' => 'home', 'titlePage' => __('Home')])

    @section('content')
    <div class="content">
        <div class="container-fluid-1">
            <div class="row">
                @foreach ($peliculas as $pelicula)
                <div class="col-lg-4">
                    <div class="card card-chart">
                        <div class="card-header">
                            <center>
                                <img src="{{ asset($pelicula->image)}}" class="img-fluid img-thumbnail" width="300dp">
                            </center>
                            <br><br>
                            <h3 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i> {{ $pelicula->nombre}}</h3><br>
                            <h6 class="card-category">{{ $pelicula->sinopsis}}</h6><br>
                            <h4 class="card-category">{{ $pelicula->precio_unitario}}</h4>
                        </div>
                        <div class="card-body">
                            <div class="chart-area">
                                <canvas id="chartLinePurple"></canvas>
                            </div>
                        </div>
                        <div class="col-12 text-right">
                            <a href="{{route('alquilers.index')}}" class="btn btn-sm btn-facebook">Alquilar Pelicula</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endsection
</body>

</html>




<style>
    .container-fluid {
        height: 10 0px;
    }

    .content {
        height: 10px;
    }
</style>