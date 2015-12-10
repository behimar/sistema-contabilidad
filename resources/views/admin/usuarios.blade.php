@extends('layouts.master')
@section('title', 'Administración de Usuarios')
@section('content')
    <div class="col s12 m12  app-card-child">
        <div class="card white ">
            <div class="card-content">
                <div class="row">
                    <span class="card-title blue-grey-text">Lista de usuarios</span>
                    <div class="card-content blue-grey-text">
                        <table class="highlight responsive-table">
                            <thead>
                            <tr>
                                <th data-field="id">Nombre de usuario</th>
                                <th data-field="name">Correo</th>
                                <th data-field="debe">Editar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>Edit</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection