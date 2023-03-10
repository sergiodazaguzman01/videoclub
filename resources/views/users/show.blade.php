@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Detalles del usuario'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <div class="card-title">Usuarios</div>
                        <p class="card-category">Vista detallada del usuario {{ $user->name }}</p>


                    </div>
                    <!--body-->
                    <div class="row">
                        <div class="col-11 text-right">
                            <a href="{{route('users.index')}}" class="btn btn-primary">Volver</a>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-4">
                                <div class="card card-user">
                                    <div class="card-body">
                                        <p class="card-text">
                                        <div class="author">
                                            <a href="#">
                                                <img src="{{ asset('/img/default-avatar.png') }}" alt="image" class="avatar">
                                                <h5 class="title mt-3">{{ $user->name }}</h5>
                                            </a>

                                            <p class="description">
                                                {{ $user->username }} <br>
                                                {{ $user->email }} <br>
                                                {{ $user->created_at }}
                                            </p>
                                        </div>
                                        </p>
                                        <div class="card-description">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam officia corporis molestiae aliquid provident placeat.
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="button-container">
                                            <a href="{{route('users.edit', $user->id)}}" class="btn btn-sm btn-warning"> <i class="material-icons">edit</i></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end card user-->

                            <div class="col-md-4">
                                <div class="card card-user">
                                    <div class="card-body">
                                        <p class="card-text">
                                        <div class="author">
                                            <a href="#" class="d-flex">
                                                <img src="{{ asset('/img/default-avatar.png') }}" alt="image" class="avatar">
                                                <h5 class="title mx-3">{{ $user->name }}</h5>
                                            </a>
                                            <p class="description">
                                                {{ $user->username }} <br>
                                                {{ $user->email }} <br>
                                                {{ $user->created_at }}
                                            </p>
                                        </div>
                                        </p>
                                        <div class="card-description">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam officia corporis molestiae aliquid provident
                                            placeat.
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="button-container">
                                            <a href="{{route('users.edit', $user->id)}}" class="btn btn-sm btn-warning"> <i class="material-icons">edit</i></a>

                                        </div>
                                    </div>
                                </div>
                            </div><!--end card user 2-->

                            <!--Start third-->
                            <div class="col-md-4">
                                <div class="card card-user">
                                    <div class="card-body">
                                        <table class="table table-bordered table-striped">
                                            <tbody>
                                                <tr>
                                                    <th>ID</th>
                                                    <td>{{ $user->id }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Name</th>
                                                    <td>{{ $user->name }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Email</th>
                                                    <td><span class="badge badge-primary">{{ $user->email }}</span></td>
                                                </tr>
                                                <tr>
                                                    <th>Username</th>
                                                    <td>{!! $user->username !!}</td>
                                                </tr>
                                                <tr>
                                                    <th>Created at</th>
                                                    <td><a href="#" target="_blank">{{ $user->created_at  }}</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer">
                                        <div class="button-container">
                                            <a href="{{route('users.edit', $user->id)}}" class="btn btn-sm btn-warning"> <i class="material-icons">edit</i></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end third-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection