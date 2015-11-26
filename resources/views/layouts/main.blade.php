@extends('layouts.master')
@section('title', 'Inicio')
@section('content')
    <div class="col s12 m12  app-card-child">
        <div class="card white ">
            <div class="card-content">
                <div class="row">
                    @if($cuentas == null)
                        <h4 class="center red-text lighten-1">No se econtraron registros</h4>
                    @else
                        <span class="card-title blue-grey-text">Comprobante Diario</span>
                        <div class="card-content blue-grey-text">
                            <ul class="collapsible popout" data-collapsible="accordion">
                            @foreach($folios as $folio)
                                <li>
                                    <div class="collapsible-header">
                                        <strong>Comprobante:</strong> {{$folio->id}}
                                        <strong>Fecha:</strong> {{ date('d/m/Y',strtotime($folio->created_at))}}
                                    </div>
                                    <div class="collapsible-body">
                                        <div class="container">
                                            <table class="highlight responsive-table">
                                                <thead>
                                                <tr>
                                                    <th data-field="name">Cuenta</th>
                                                    <th data-field="name">Detalle</th>
                                                    <th data-field="debe">Debe</th>
                                                    <th data-field="haber">Haber</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($cuentas as $cuenta)
                                                    @if($cuenta->id == $folio->id )
                                                        <tr>
                                                            <td>{{$cuenta->nomenclator_id}}</td>
                                                            <td>{{$cuenta->cuenta}}</td>
                                                            @if($cuenta->tipo == 'debe')
                                                                <td>{{$cuenta->monto}}</td>
                                                                <td></td>
                                                            @else
                                                                <td></td>
                                                                <td>{{$cuenta->monto}}</td>
                                                            @endif
                                                        </tr>
                                                    @endif
                                                @endforeach
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td class="red-text lighten-1" style="border-top:  2px solid;">{{$folio->montoDebe}}</td>
                                                    <td class="red-text lighten-1" style="border-top:  2px solid;">{{$folio->montoHaber}}</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        </div>
                    @endif
                </div>
            </div>

        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function(){
            $('.collapsible').collapsible({
                accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
            });
        });
    </script>
@endsection