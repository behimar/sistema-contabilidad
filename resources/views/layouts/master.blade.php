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
<body class="grey lighten-1">
    <header>
        <ul id="drop" class="dropdown-content">
            <li>
                {!! link_to_route('index', $title = 'Mi perfil', $parameters = Auth::User()->id ) !!}
            </li>
            <li>
                <a href="{{route('logout')}}">Salir</a>
            </li>
        </ul>
        <nav class="indigo darken-1">
            <div class="nav-wrapper container-fluid">
                <a href="#!" class="brand-logo">ContaWeb</a>
                <ul class="left">
                    <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                </ul>
                <ul class="right">
                    <!-- Dropdown Trigger -->
                    <li><a class="dropdown-button" href="#!" data-activates="drop">{{Auth::User()->name}}<i class="material-icons right">arrow_drop_down</i></a></li>
                </ul>

                <ul id="slide-out" class="side-nav fixed">
                    <div class="app-logoPro">
                        <img  src="../images/iconoUser.png">
                        <p><em>{{Auth::User()->name}}</em></p>

                    </div>
                  @include('layouts.menu')
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    <script>
        $('.dropdown-button').dropdown({
                    inDuration: 300,
                    outDuration: 225,
                    constrain_width: false, // Does not change width of dropdown to that of the activator
                    hover: false, // Activate on hover
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