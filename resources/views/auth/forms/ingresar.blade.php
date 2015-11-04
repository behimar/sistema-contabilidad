{!! Form::open(['route'=>'login','method' => 'post' ]) !!}

    {!! csrf_field() !!}


    <div class="row">
        <div class="input-field col s12">
            {!! Form::text('name', null ,['class' => 'validate', 'id'=> 'name']) !!}
            {!! Form::label('name','Nombre de Usuario') !!}
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            {!! Form::password('password', ['class' => 'validate', 'id'=> 'name']) !!}
            {!! Form::label('password','Contraseña') !!}
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <input type="checkbox" id="remember" name="remember"/>
            <label for="remember">Recuerdame</label>
        </div>
    </div>
    <div class="row left-align">
        <button class="btn waves-effect waves-light red lighten-1" type="submit" name="">Ingresar
        </button>
        <button class="btn modal-action modal-close waves-effect waves-light red lighten-1" type="button" name="">Cancelar
        </button>

    </div>
{!! Form::close() !!}