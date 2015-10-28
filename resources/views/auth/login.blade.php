@extends('auth.app')
@section('content')

    <div class="container app-card-parent">

        <div class="row">
            <div class="card blue-grey darken-1">
                <div class="col s12 m6 l6">

                    <div class="card-content white-text">
                        <span class="card-title">Sistema de Contabilidad</span>
                        <p>Es un sistema que permite la automatizacion del registro y proceso de operaciones económicas y financieras </p>
                    </div>

                </div>
                <div class="col s12 m6 l6">
                    <div class="card-content white-text">
                        <form class="col s12" method="post" >
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                        <span class="card-title">Ingresar</span>
                        <div class="row">
                            <div class="input-field col s12">
                                <input  id="first_name" type="text" class="validate" name="nick">
                                <label for="first_name">Nombre de Usuario</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password" type="password" class="validate" name="password">
                                <label for="password">Contraseña</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="checkbox" id="test5" />
                                <label for="test5">Recuerdame</label>
                            </div>
                        </div>
                        <div class="row center-align">
                            <button class="btn waves-effect waves-light" type="submit" name="">Ingresar
                                <i class="material-icons right"></i>
                            </button>

                            <button class="btn waves-effect waves-light modal-trigger" href="#modal1">Registrarse
                                <i class="material-icons right"></i>
                            </button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    {{--modal registro--}}
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Registrarse</h4>
            <p></p>
        </div>
        <div class="modal-footer">
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
        </div>
    </div>
    {{--fin modal registro--}}
@endsection