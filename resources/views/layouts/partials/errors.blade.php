@if($errors->has())
    <div class="container-fluid">
        <div class="card-panel small red" role="alert">
            @foreach ($errors->all() as $error)
                <p class="center">{{ $error }}</p>
            @endforeach
        </div>
    </div>
@endif