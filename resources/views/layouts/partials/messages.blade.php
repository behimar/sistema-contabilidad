@if(Session::has('message'))
    <div class="alert alert-dismissible alert-success" class="col-md-10">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <i class="fa fa-check-square"></i>{{Session::get('message')}}
    </div>
@endif