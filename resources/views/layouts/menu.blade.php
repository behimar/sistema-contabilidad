@if(Auth::User()->type == 'admin')
    <li><a href="{{route('home')}}">Inicio</a></li>
    <li><a href="{{route('newAccount')}}">Generar Comprobante</a></li>
    <li><a href="#!">Libros Mayores</a></li>
    <li><a href="#!">Estados financieros</a></li>
    <li class="divider"></li>
    <li><a href="#!">Agregar Usuarios</a></li>

@elseif(Auth::User()->type == 'contador')
    <li><a href="{{route('home')}}">Inicio</a></li>
    <li><a href="{{route('newAccount')}}">Generar Comprobante</a></li>
    <li><a href="#!">Libros Mayores</a></li>
    <li><a href="#!">Estados financieros</a></li>
    <
@endif