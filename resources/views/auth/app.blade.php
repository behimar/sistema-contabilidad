
<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="assets/css/login.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Conta</title>
</head>

<body>
<nav>
    <div class="nav-wrapper container">
        <a href="{{route('login')}}" class="brand-logo">ContaWeb</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li>
                <a href="{{route('login')}}">Inicio</a>
            </li>
            <li>
                <a href="{{route('acerca')}}">Acerca de</a>
            </li>
            <li>
                <a href="{{route('contacto')}}">Contactos</a>
            </li>
        </ul>

        <ul class="side-nav" id="mobile-demo">
            <li>
                <a href="{{route('login')}}">Inicio</a>
            </li>
            <li>
                <a href="{{route('acerca')}}">Acerca de</a>
            </li>
            <li>
                <a href="{{route('contacto')}}">Contactos</a>
            </li>
        </ul>
    </div>

</nav>
@yield('content')

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="assets/js/materialize.min.js"></script>
<script>
    $( document ).ready(function() {
        $(".button-collapse").sideNav();



    });
</script>
<script>
    $( document ).ready(function() {
        $('.parallax').parallax();
        //$('.modal-trigger').leanModal();
    });
</script>
<script>
    $( document ).ready(function() {
        $('.modal-trigger').leanModal();

    });
</script>
</body>
</html>