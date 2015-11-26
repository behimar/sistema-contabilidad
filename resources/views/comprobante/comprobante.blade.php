@extends('layouts.master')
@section('title', 'Crear Comprobante')
@section('content')
    @include('layouts.partials.errors')
    @include('layouts.partials.messages')
    <div class="row">
        <div class="col s12 m12 app-card-child">
            <div class="card white">
                <form action="{{route('newAccount',['nume'=>$num,'sumDebe'=>$sumDebe,'sumHaber'=>$sumHaber])}}" class="col s12" method="post">
                    {!! csrf_field() !!}
                <div class="card-content blue-grey-text">
                    <span class="card-title blue-grey-text">Comprobante Diario</span>
                    <hr>
                    <div class="row">
                        <div class="input-field col s12 m3">
                            <select name="ciudad">
                                <option value="" disabled selected>Elija una cuidad</option>
                                <option value="La Paz">La Paz</option>
                                <option value="Cochabamba">Cochabamba</option>
                                <option value="Santa Cruz">Santa Cruz</option>
                            </select>
                            <label>Ciudad</label>
                        </div>
                        <div class="input-field col s12 m5">
                            <input disabled value="{{ $date }}" id="disabled" type="text" class="validate" name="fecha">
                            <label for="disabled">Fecha</label>
                        </div>
                        <div class="chip right">
                            N° {{$num}}
                        </div>
                    </div>
                    <div class="row">
                        <a href="{{route('newTransaction',[$num])}}" class="btn btn-small waves-effect waves-light red lighten-1 right">Registrar Nueva Transacción</a>
                    </div>
                    <div class="row">
                        @if($transactions == null)
                            <h4 class="center red-text lighten-1">No hay transacciones registradas!</h4>
                        @else
                            <table class="highlight responsive-table">
                                <thead>
                                <tr>
                                    <th data-field="id">Codigo</th>
                                    <th data-field="name">Cuentas Afectadas</th>
                                    <th data-field="debe">Debe</th>
                                    <th data-field="haber">Haber</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($transactions as $transaction)
                                    <tr>
                                        <td>{{$transaction->nomenclator_id}}</td>
                                        @if($transaction->tipo =='haber')
                                            <td> <blockquote> {{$transaction->cuenta}}</blockquote></td>
                                        @else
                                            <td>{{$transaction->cuenta}}</td>
                                        @endif
                                        @if($transaction->tipo == 'debe')
                                            <td>{{$transaction->monto}}</td>
                                            <td></td>
                                        @elseif($transaction->tipo == 'haber')
                                            <td></td>
                                            <td>{{$transaction->monto}}</td>
                                        @endif
                                        <td>
                                            <a href="{{route('deleteTransaction',[$transaction->id])}}" class="btn-floating btn-small waves-effect waves-light red lighten-1"><i class="material-icons">delete</i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td class="red-text lighten-1" style="border-top:  2px solid;">{{$sumDebe}}</td>
                                    <td class="red-text lighten-1" style="border-top:  2px solid;">{{$sumHaber}}</td>
                                </tr>
                                </tbody>
                            </table>
                        @endif
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m12 ">
                            <textarea id="glosa" class="materialize-textarea" length="120" name="glosa"></textarea>
                            <label for="glosa">Glosa</label>
                        </div>
                    </div>
                </div>
                <div class="card-action">
                    @if($sumDebe == $sumHaber)
                        <button type="submit" class="btn waves-effect waves-light red lighten-1">Guardar</button>
                    @else
                        <p class="center red-text lighten-1">No se puede hacer el registro.</p>
                    @endif
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('select').material_select();
        });
    </script>
@endsection