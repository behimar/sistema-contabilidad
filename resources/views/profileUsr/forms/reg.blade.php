{!! csrf_field() !!}

<div class="row">
    <div class="input-field col s12 m12">
        <input id="nombre" type="text" name="nombre" class="validate">
        <label for="nombre">Nombres</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12 m6">
        <input id="apP" type="text" name="apP" class="validate">
        <label for="apP">Apellido Paterno</label>
    </div>
    <div class="input-field col s12 m6">
        <input id="apM" type="text" name="apM" class="validate">
        <label for="apM">Apellido Materno</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12 m6">
        <input id="telefono" type="number" name="telefono" class="validate">
        <label for="telefono">Telefono</label>
    </div>
    <div class="input-field col s12 m6">
        <input id="fecNac" type="date" name="fecNac" class="validate">
        {{--<input type="date" class="datepicker">--}}
        <label for="fecNac"></label>
    </div>
</div>
<div class="row left-align">
    <button class="btn waves-effect waves-light red lighten-1" type="submit">Registrarse</button>
</div>