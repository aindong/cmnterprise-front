<!DOCTYPE html>
<html>
<head>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    @yield('headers')

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="/materialize/css/materialize.min.css"  media="screen,projection"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @yield('styles')
</head>

<body style="background: url('/img/bg.png')">

<header>
    <nav>
        <ul class="left" style="margin-left: 20px"><img src="/img/logo1.png" alt="" style="width: 300px;height: auto;vertical-align: middle;"></ul>
        <ul class="right hide-on-med-and-down">
            <li><a href="#!">First Sidebar Link</a></li>
            <li><a href="#!">Second Sidebar Link</a></li>
        </ul>
        <ul id="slide-out" class="side-nav">
            <li><a href="#!">First Sidebar Link</a></li>
            <li><a href="#!">Second Sidebar Link</a></li>
        </ul>
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
    </nav>
</header>

@yield('content')

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="/materialize/js/materialize.min.js"></script>
<script type="text/javascript" src="/js/moment.js"></script>

<script>
    $(function() {
        $(".button-collapse").sideNav();

        $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 90, // Creates a dropdown of 15 years to control year
            max: new Date()
        });
    });
</script>
@yield('scripts')
</body>
</html>