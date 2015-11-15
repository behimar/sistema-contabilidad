@extends('profileUsr.app')
@section('content')
    @include('layouts.partials.errors')

    <div class="col s12 m12">
        <div class="card white">
            <div class="card-content">
                <div class="row">
                    <form class="col s12" action="{{route('regProf',['id' => Auth::User()->id])}}"  method="POST">
                        @include('profile.forms.reg')
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
            selectYears: 45 // Creates a dropdown of 15 years to control year
        });

    </script>
@endsection