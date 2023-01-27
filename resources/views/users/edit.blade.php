@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Edit Usuario'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!--en el formulario llamamos el metodo desde la rout-->
                <form action="{{route('users.update', $user->id)}}" method="post" class="form-horizontal">
                    <!-- FORMA DE SEGURIDAD DE LARAVEL @CSRF -->
                    @csrf
                    <!-- //hiden mandamas el metodo put  -->
                    @method('PUT')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Usuario</h4>
                            <p class="card-category">Actualice los Datos</p>

                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="{{route('users.index')}}" class="btn btn-primary">Volver</a>
                                </div>
                            </div>
                            <div class="row">
                                <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="name" value="{{$user->name}}" autofocus required>
                                </div>
                            </div>
                            <div class="row">
                                <label for="email" class="col-sm-2 col-form-label">Correo</label>
                                <div class="col-sm-7">
                                    <input type="email" class="form-control" name="email" value="{{$user->email}}" autofocus required>
                                </div>
                            </div>
                            <div class="row">
                                <label for="password" class="col-sm-2 col-form-label">Contraseña</label>
                                <div class="col-sm-7">
                                    <input type="password" class="form-control" name="password" placeholder="Ingrese la contraseña solo en caso de modificarla" autofocus>
                                </div>
                            </div>
                        </div>
                        <!-- FOOTHER -->
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection