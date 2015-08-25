<!DOCTYPE html>
<html>
<head>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="/materialize/css/materialize.min.css"  media="screen,projection"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    @yield('styles')
</head>

<body>

<!-- BEGIN: Navigation menu -->
<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
    <li><a href="#!">one</a></li>
    <li><a href="#!">two</a></li>
    <li class="divider"></li>
    <li><a href="#!">three</a></li>
</ul>
<nav>
    <div class="nav-wrapper">
        <a href="#" data-activates="mobileNav" class="button-collapse"><i class="material-icons">menu</i></a>
        <a href="#!" style="margin-left: 20px">C&M - Admin Dashboard</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>

        <ul id="mobileNav" class="side-nav">
            <li><a href="#!">one</a></li>
            <li><a href="#!">two</a></li>
            <li class="divider"></li>
            <li><a href="#!">three</a></li>
        </ul>
    </div>
</nav>

@yield('content')

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="/materialize/js/materialize.min.js"></script>
<script>
    $(function() {
        $(".button-collapse").sideNav();
    });
</script>
@yield('scripts')
</body>
</html>