@extends('layouts.main', ['activePage' => 'Reserva', 'titlePage' => 'Vista detallada de un alquiler'])
@section('content')

<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <span class="card-title">DETALLE DEl AlQUILER</span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('alquilers.index') }}"> Volver</a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card card-user">
                        <div class="card-body">
                            <p class="card-text">
                            <div class="author">
                                <a href="#" class="d-flex">
                                    <img src="{{ asset($alqui->image)}}"  width="200dp">
                                    &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
                                    <h5 class="title mt-3">{{ $alqui->nombre }}</h5>
                                </a>
                                <h4 class="d-flex">
                                    <b>Cliente:&#160;&#160;</b>
                                    <p class="description">
                                    {{ $alqui->name }}
                                    </p>
                                </h4>

                                <h5 class="d-flex">
                                    <b>Fecha de prestamo:&#160;&#160;</b>
                                    <p class="description">
                                    {{ $alqui->fecha_inicio }}
                                    </p>
                                </h5>
                                <h5 class="d-flex">
                                    <b>Fecha de devolucion:&#160;&#160;</b>
                                    <p class="description">
                                    {{ $alqui->fecha_fin }}
                                    </p>
                                </h5>

                                <h5 class="d-flex">
                                    <b>Precio total:&#160;&#160;</b>
                                    <p class="description">
                                    {{ $alqui->valor_pelicula }}
                                    </p>
                                </h5>

                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="button-container">
                            </div>
                        </div>
                    </div>
                </div><!--end card user-->
            </div>
        </div>
    </div>
</section>
@endsection