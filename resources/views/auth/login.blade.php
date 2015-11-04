@extends('auth.app')
@section('content')

    <div class="parallax-container">
        <div class="parallax"><img src="../images/2.jpg"></div>
        <div class="container">
            <div style="padding-top: 150px">
            <h1 class="center-align">Sistema de Contabilidad</h1>

            </div>
            <h5 class="center-align">Es un sistema que permite la automatizacion del registro y proceso de operaciones económicas y financieras </h5>
            <div class="row center">
                <button class="btn waves-effect waves-light modal-trigger red lighten-1" href="#login">Ingresar
                    <i class="material-icons right"></i>
                </button>
                <button class="btn waves-effect waves-light modal-trigger red lighten-1" href="#register">Registrarse
                    <i class="material-icons right"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col s12 m4">
                <h2 class="center">
                    <i class="large material-icons">description</i>
                </h2>
                <h5 class="center">Registro de Operaciones</h5>
            </div>
            <div class="col s12 m4">
                <h2 class="center">
                    <i class="large material-icons">library_books</i>
                </h2>
                <h5 class="center">Generacion de Libros Diario y Mayor</h5>
            </div>
            <div class="col s12 m4">
                <h2 class="center">
                    <i class="large material-icons">trending_up</i>
                </h2>
                <h5 class="center">Generacion de Estados Financieros</h5>
            </div>
        </div>
    </div>
    {{--modal login--}}
    <div id="login" class="modal">
        <div class="modal-content">
            <h4>Ingresar</h4>
            @include('auth.forms.ingresar')
        </div>
    </div>
    {{--fin modal login--}}
    {{--modal registro--}}
    <div id="register" class="modal">
        <div class="modal-content">
            <h4>Registrarse</h4>
            <p></p>
        </div>

    </div>
    {{--fin modal registro--}}
@endsection