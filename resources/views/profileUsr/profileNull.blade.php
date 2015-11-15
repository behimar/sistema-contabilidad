@extends('profileUsr.app')
@section('content')
    <div class="col s12 m12  app-card-child">
        <div class="card white ">
            <div class="card-content">
                <div class="row">
                    <div class="col s12 m4 center">
                        <i class="large material-icons">report_problem</i>
                    </div>
                    <div class="col s12 m8">
                        <br>
                        <p>Estimado {{ strtoupper(Auth::User()->name)}} no tienes registrado tus datos personales.... </p>
                        <p>No te preocupes empecemos a llenarlos ahora</p>
                    </div>
                </div>
            </div>
            <div class="card-action">

                {{-- {!! link_to_route('create', $title = 'Vamos a registrarnos', $parameters = Auth::User()->id, $attributes = ['class'=>'red-text lighten-1']) !!} --}}
                <a href="{{route('create')}}" class="red-text lighten-1">Vamos a registrarnos!</a>

            </div>
        </div>
    </div>
@endsection
