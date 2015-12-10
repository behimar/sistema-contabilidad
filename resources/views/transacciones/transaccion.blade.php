@extends('layouts.master')
@section('title', 'Nueva Transacción')
@section('content')
    @include('layouts.partials.errors')
    @include('layouts.partials.messages')

        <div class="col s12 m12 app-card-child" >
            <div class="card white">
                <form action="{{route('newTransaction',[$num])}}" class="col s12" method="post" name="form">
                    {!! csrf_field() !!}
                    <div class="card-content blue-grey-text">
                        <div class="row">
                            <span class="card-title blue-grey-text">Nueva Transacción</span>
                            <div class="chip right">
                                Del Comprobante N° {{$num}}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col s1 m1">
                                <a class="btn-floating btn-large waves-effect waves-light red lighten-1 modal-trigger" href="#nomen"><i class="material-icons">add</i></a>
                            </div>
                            <div class="input-field col s5 m5">

                                <input id="disabled" type="text" class="validate" name="nomenclator_id">

                            </div>
                            <div class="input-field col s3 m3">
                                <select name="tipo">
                                    {{--<option value="" disabled selected>Elija una</option>--}}
                                    <option value="debe">Debe</option>
                                    <option value="haber">Haber</option>

                                </select>
                                <label>Categoria</label>
                            </div>
                            <div class="input-field col s3 m3">
                                <input id="monto" type="text" class="validate" name="monto" onKeyPress="return checkIt(event)">
                                <label for="monto">Monto</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button type="submit" class="btn waves-effect waves-light red lighten-1">Guardar</button>

                    </div>
                </form>
            </div>

        </div>


    {{--modal--}}
    <div id="nomen" class="modal modal-fixed-footer">
        <div class="modal-content">
            <h4 class="red-text lighten-1">Nomenclador</h4>
            @if($nomencladores ==null)
                <h4 class="center red-text lighten-1">No hay Cuentas Registradas!</h4>
            @else
                <div class="input-field col s4 m4">
                    <i class="material-icons prefix">search</i>
                    <input id="search-cuentas" type="text">
                </div>
                <table class="highlight responsive-table">
                    <thead>
                    <tr>
                        <th data-field="id" class="red-text lighten-1">Codigo</th>
                        <th data-field="name" class="red-text lighten-1">Cuenta</th>
                    </tr>
                    </thead>
                    <tbody id="table-cuentas">
                    @foreach($nomencladores as $nomenclador)
                        <tr id="fil">
                            <td class="modal-action modal-close" onclick="escribir(this.id)" id="{{$nomenclador->id}}">{{$nomenclador->id}}</td>
                            <td>{{$nomenclador->cuenta}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
        <div class="modal-footer">

        </div>
    </div>

@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('select').material_select();
            $('.modal-trigger').leanModal();
        });

        var $rows = $('#table-cuentas tr');

        $('#search-cuentas').keyup(function() {

            var val = '^(?=.*\\b' + $.trim($(this).val()).split(/\s+/).join('\\b)(?=.*\\b') + ').*$',
                    reg = RegExp(val, 'i'),
                    text;

            $rows.show().filter(function() {
                text = $(this).text().replace(/\s+/g, ' ');
                return !reg.test(text);
            }).hide();

        });
        function escribir(clicked_id) {

            //var cod = $(this).document.getElementById('disableed').innerHTML;

            console.log(clicked_id);
            //var cod = document.getElementByName('tr').getElementById("disableed").innerHTML;

            //document.getElementById("disabled").innerHTML = cod;
            document.form.disabled.value = clicked_id;

        }
        function checkIt(evt) {

            evt = (evt) ? evt : window.event

            var charCode = (evt.which) ? evt.which : evt.keyCode

            if (charCode > 31 && (charCode < 46 || charCode > 57)) {

                status = "Ingrese solo números"

                return false

            }

            status = ""

            return true

        }
    </script>
@endsection