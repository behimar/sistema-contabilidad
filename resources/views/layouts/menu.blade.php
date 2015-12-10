@if(Auth::User()->type == 'admin')
    <li><a href="{{route('home')}}">Inicio</a></li>
    <li><a href="{{route('newAccount')}}">Generar Comprobante</a></li>
    <li><a href="{{route('libros')}}">Libros Mayores</a></li>

    <li class="divider"></li>
    <li><a href="{{route('users')}}">Administrar Usuarios</a></li>

@elseif(Auth::User()->type == 'contador')
    <li><a href="{{route('home')}}">Inicio</a></li>
    <li><a href="{{route('newAccount')}}">Generar Comprobante</a></li>
    <li><a href="{{route('libros')}}">Libros Mayores</a></li>


@endif