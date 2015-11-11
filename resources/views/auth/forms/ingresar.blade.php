<form class="col s12" action="{{route('login')}}"  method="post">
    {!! csrf_field() !!}


    <div class="row">
        <div class="input-field col s12">
            <i class="material-icons prefix">account_circle</i>
            <input name="name" id="name" type="text" class="validate">
            <label for="name">Nombre de usuario</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <i class="material-icons prefix">vpn_key</i>
            <input id="password" type="password" name="password" class="validate">
            <label for="password">Contraseña</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <input type="checkbox" id="remember" name="remember"/>
            <label for="remember">Recuerdame</label>
        </div>
    </div>
    <div class="row left-align">
        <button class="btn waves-effect waves-light red lighten-1" type="submit">Ingresar
        </button>
        <button class="btn modal-action modal-close waves-effect waves-light red lighten-1" type="button" name="">Cancelar
        </button>

    </div>
</form>