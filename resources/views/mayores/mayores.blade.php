@extends('layouts.master')
@section('title', 'Libro Mayor')
@section('content')
    <div class="col s12 m12  app-card-child">
        <div class="card white ">
            <div class="card-content">
                <div class="row">
                    <span class="card-title blue-grey-text">Libro Mayor</span>
                    <div class="card-content blue-grey-text">
                        <ul>
                            @foreach($cuentas as $cuenta)
                                <div>

                                    <strong>Cuenta:</strong> {{$cuenta->cuenta}}
                                </div>
                                <br>
                                <table class="highlight responsive-table">
                                    <thead>
                                    <tr>
                                        <th data-field="name">Fecha</th>
                                        <th data-field="name">Asiento N°</th>
                                        <th data-field="debe">Detalle</th>
                                        <th data-field="haber">Debe</th>
                                        <th data-field="haber">Haber</th>
                                        <th data-field="haber">Saldo</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                @foreach($libros as $libro)
                                    @if($libro->nomenclator_id == $cuenta->nomenclator_id)
                                        <tr>

                                            <td>{{date('d/m/Y',strtotime($libro->created_at))}}</td>
                                            <td>{{$libro->account_id}}</td>
                                            <td>{{$libro->glosa}}</td>
                                            @if($libro->tipo == 'debe')
                                                <td>{{$libro->monto}}</td>
                                                <p class="hide">{{$suDe = $suDe +$libro->monto}}</p>
                                                <td></td>
                                            @else
                                                <td></td>
                                                <td>{{$libro->monto}}</td>
                                                <p class="hide">{{$suHa = $suHa +$libro->monto}}</p>
                                            @endif
                                            @if($libro->tipo == 'debe')
                                                <td>{{$saldo = $saldo + $libro->monto}}</td>
                                            @else
                                                <td>{{$saldo = $saldo - $libro->monto}}</td>
                                            @endif
                                        </tr>
                                    @endif
                                @endforeach
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="red-text lighten-1" style="border-top:  2px solid;">{{$suDe}}</td>
                                            <td class="red-text lighten-1" style="border-top:  2px solid;">{{$suHa}}</td>
                                            @if($saldo <0)
                                                <td class="red-text lighten-1" style="border-top:  2px solid;">{{$saldo= $saldo * -1}}</td>
                                            @else
                                                <td class="red-text lighten-1" style="border-top:  2px solid;">{{$saldo}}</td>
                                            @endif
                                            <p class="hide">{{$suDe = 0}}</p>
                                            <p class="hide">{{$suHa = 0}}</p>
                                            <p class="hide">{{$saldo = 0}}</p>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection