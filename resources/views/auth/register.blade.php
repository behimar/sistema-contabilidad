@extends('auth.app')
@section('content')
    <div class="container">
        @if(Session::has('message'))
            <div class="alert alert-dismissible alert-success" class="col-md-10">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <i class="fa fa-check-square"></i>{{Session::get('message')}}
            </div>
        @endif
        <h3>Registrese</h3>
            {{--@include('auth.forms.registrar')--}}
            <form class="col s12" action="{{route('register')}}"  method="POST">
                {!! csrf_field() !!}
                <div class="row">
                    <div class="input-field col s6">
                        <input id="id" type="number" name="id" class="validate">
                        <label for="id" data-error="Ingrese solo números">Carnet de Identidad</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="name" type="text" name="name" class="validate">
                        <label for="name" data-error="Verifique los caracteres">Nombre</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" name="email" class="validate">
                        <label for="email" data-error="Ingrese un correo electronico">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="password" type="password" name="password" class="validate">
                        <label for="password" data-error="Debe tener 6 caracteres">Contraseña</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="password_confirmation" type="password" name="password_confirmation" class="validate">
                        <label for="password_confirmation" data-error="Debe tener 6 caracteres">Confirme Contraseña</label>
                    </div>
                </div>
                <div class="row left-align">
                    <button class="btn waves-effect waves-light red lighten-1" type="submit">Registrarse</button>
                    <a class="btn  modal-close waves-effect waves-light red lighten-1" type="button" href="{{'/'}}" >Cancelar
                    </a>

                </div>

            </form>
    </div>
@endsection