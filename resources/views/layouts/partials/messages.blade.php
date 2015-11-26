@if(Session::has('message'))
    <div class="card-panel small red" role="alert">
        <i class="fa fa-check-square"></i>{{Session::get('message')}}
    </div>
@endif