@extends('auth.app')
@section('content')
    @if($errors->has())
        <div class="container-fluid">
            <div class="card-panel small red" role="alert">
                @foreach ($errors->all() as $error)
                    <p class="center">{{ $error }}</p>
                @endforeach
            </div>
        </div>
    @endif

    <div class="parallax-container">
        <div class="parallax"><img src="../images/2.jpg"></div>
        <div class="container">
            <div style="padding-top: 130px">
            <h1 class="center-align">Sistema de Contabilidad</h1>

            </div>
            <h5 class="center-align">Es un sistema que permite la automatizacion del registro y proceso de operaciones económicas y financieras </h5>
            <div class="row center">
                <button class="btn waves-effect waves-light modal-trigger red lighten-1" href="#login">Ingresar
                    <i class="material-icons right"></i>
                </button>
                <a href="{{route('register')}}" class="btn waves-effect waves-light red lighten-1">Registrarse</a>
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
                <p>Es la afectación o asiento que se realiza en los libros de contabilidad de un ente económico,
                    con objeto de proporcionar los elementos necesarios para elaborar la información financiera del mismo</p>
            </div>

            <div class="col s12 m4">

                    <h2 class="center">
                        <i class="large material-icons">library_books</i>
                    </h2>
                    <h5 class="center">Generacion de Libros Diario y Mayor</h5>
                    <p class="left-align"><strong>Libro diario</strong></p>
                    <p>Es un documento numerado, que le permite registrar en forma cronológica todas las transacciones realizadas por la empresa.
                        El libro diario es el registro contable principal en cualquier sistema contable,
                        en el cual se anotan todas las operaciones.
                    </p>
                    <p><strong>Libro diario</strong></p>
                    <p>Es el libro de contabilidad en donde se organizan y clasifican las diferentes cuentas que moviliza la cooperativa de sus activos,
                        pasivos y patrimonio. Para que los registros sean válidos deben asentarse en el libro debidamente autorizado.
                    </p>

            </div>
            <div class="col s12 m4">
                <h2 class="center">
                    <i class="large material-icons">trending_up</i>
                </h2>
                <h5 class="center">Generacion de Estados Financieros</h5>
                <p>Constituyen un resumen final de todo el proceso contable correspondiente a un período de tiempo
                    relativo a las actividades operativas, directas e indirectas a la empresa en estudio.
                </p>
                <p>Deben contener en forma clara y comprensible todo lo necesario para juzgar los resultados de operación,
                    la situación financiera de la entidad, los cambios en su situación financiera y las modificaciones en su capital contable.
                    Su finalidad es que los lectores puedan juzgar adecuadamente lo que los estados financieros muestran.
                </p>
            </div>
        </div>
    </div>

    <div class="parallax-container">
        <div class="parallax"><img src="../images/1.jpg"></div>
    </div>

    <footer class="page-footer indigo darken-1">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Escuela Militar de Ingenieria </h5>
                    <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Desarrolado por</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © Derechos Reservados Escuela militar de Ingenieria | Carrera de Ingenieria de Sistemas

            </div>
        </div>
    </footer>

    {{--modal login--}}
    <div id="login" class="modal">
        <div class="modal-content">
            <h4>Ingresar</h4>
            @include('auth.forms.ingresar')
        </div>
    </div>
    {{--fin modal login--}}
@endsection