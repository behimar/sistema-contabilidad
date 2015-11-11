<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="assets/css/login.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="assets/css/master.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body class="blue-grey lighten-5">
<header>
    <ul id="drop" class="dropdown-content">
        <li><a href="">{{Auth::User()->name}}</a></li>
        <li><a href="">Configuración</a></li>
        <li><a href="{{route('logout')}}">Salir</a></li>
    </ul>
    <nav class="indigo darken-1">
        <div class="nav-wrapper container">
            <a href="#!" class="brand-logo">ContaWeb</a>
            <ul class="left">
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            </ul>
            <ul class="right">
                <!-- Dropdown Trigger -->
                <li><a class="dropdown-button" href="#!" data-activates="drop">{{Auth::User()->name}}<i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>

            <ul id="slide-out" class="side-nav fixed">
                <li><a href="#!">First Sidebar Link</a></li>
                <li><a href="#!">Second Sidebar Link</a></li>
            </ul>
        </div>
    </nav>
</header>
<main>
    <div class="container">
        <h1>asdfasdf</h1>
        <h1>asdfasdf</h1>
        <h1>asdfasdf</h1>
        <h1>asdfasdf</h1>
        <h1>asdfasdf</h1>
        <h1>asdfasdf</h1>
        <h1>asdfasdf</h1>
    </div>


</main>
<!-- Navbar goes here -->

<!-- Page Layout here -->



{{--
<nav>
    <div class="nav-wrapper container">
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="sass.html">{{Auth::User()->name}}</a></li>
            <li><a href="{{route('logout')}}">Salir</a></li>

        </ul>
    <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
        <ul id="slide-out" class="side-nav fixed">
            <li><a href="#!">First Sidebar Link</a></li>
            <li><a href="#!">Second Sidebar Link</a></li>
        </ul>
    </div>
</nav>
--}}

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="assets/js/materialize.min.js"></script>
<script>
    $('.dropdown-button').dropdown({
                inDuration: 300,
                outDuration: 225,
                constrain_width: false, // Does not change width of dropdown to that of the activator
                hover: true, // Activate on hover
                gutter: 0, // Spacing from edge
                belowOrigin: false, // Displays dropdown below the button
                alignment: 'left' // Displays dropdown with edge aligned to the left of button
            }
    );
</script>
<script>
    $(".button-collapse").sideNav();
</script>
</body>
</html>