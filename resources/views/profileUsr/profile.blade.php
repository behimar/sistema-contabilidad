@extends('profile.app')
@section('content')
    <div class="row">
        <div class="col s12 m12">
            <div class="card white">
                <div class="card-content">
                    <span class="card-title red-text lighten-1">Perfil de Usuario</span>
                    <hr>
                    <div class="row">
                        <div class="col s12 m6 offset-m1">

                            <h3 class="blue-grey-text">{{ strtoupper($user->name)}}</h3>
                            <p class="blue-grey-text">{{$user->email}}</p>
                            <p><strong class="blue-grey-text">Nombre:</strong> {{$profile->nombre}}</p>
                            <p><strong class="blue-grey-text">Apellidos:</strong> {{$profile->apP}} {{$profile->apM}}</p>
                            <p><strong class="blue-grey-text">Fecha de nacimiento:</strong> {{$profile->fechaNac}}</p>
                            <p><strong class="blue-grey-text">Telefono:</strong> {{$profile->telefono}}</p>
                        </div>
                        <div class="col s12 m5 center">
                            <img class="app-img-logo" width="200" src="../images/iconoUser.png">
                        </div>
                    </div>
                </div>
                <div class="card-action">
                    <a href="#" class="red-text lighten-1">Editar datos</a>
                    <a href="{{route('home')}}" class="red-text lighten-1">Volver</a>
                </div>
            </div>
        </div>
    </div>

@endsection