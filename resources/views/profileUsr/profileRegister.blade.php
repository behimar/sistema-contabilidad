@extends('profileUsr.app')
@section('title', 'Registrarse')
@section('content')
    @include('layouts.partials.errors')

    <div class="col s12 m12 app-card-child">
        <div class="card white">
            <div class="card-content">
                <div class="row">
                    <form class="col s12" action="{{route('regProf',['id' => Auth::User()->id])}}"  method="POST">
                        @include('profileUsr.forms.reg')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>

        $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 60 // Creates a dropdown of 15 years to control year
        });

    </script>
@endsection