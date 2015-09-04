<!DOCTYPE html>
<html lang=en-US>
<head>
    <meta charset=utf-8>
    <title>C&M Enterprise</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
    </script>
    <![endif]-->
    <link rel="shortcut icon" href="/img/favicon.html">
    <link type="text/css" rel="stylesheet" href="/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="/css/magnific-popup.css">
    <link type="text/css" rel="stylesheet" href="/css/animate.min.css">
    <link type="text/css" rel="stylesheet" href="/css/multi-style.css">
    <link type="text/css" rel="stylesheet" href="/css/style.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel=stylesheet type=text/css>
<body>
<div id="mask">
    <div id="loader"></div>
</div>
<header class="header-area clearfix">
    <div class="container clearfix">
        <div class="logo-area">
            <a href=# class="logo-main"><img src="/img/logo1.png" alt=""></a>
            <a class="toggle-ico"><i class="fa fa-bars"></i></a>
        </div>
        <nav class="navigation-area">
            <ul class="main-menu">
                <li><a href=#home>Home</a></li>
                <li><a href=#our-features>Services</a></li>
                <li><a href=#about-us>About Us</a></li>
                <li><a href=#app-screenshots>Gallery</a></li>
                <li><a href=#faq>FAQ</a></li>
                <!-- <li><a href=#our-pricing>Price</a></li> -->
                <li><a href=#contact-us>Contact Us</a></li>
                <!-- <li><a href=#download-now class=download-btn>Download</a></li> -->
            </ul>
        </nav>
    </div>
</header>

@yield('content')

<footer class="footer-area">
    <div class="container">
        <a href=#><img src="/img/logo1.png" class="animated" data-animation="flipInY" data-animation-delay="100" alt=""></a>
        <p class="animated" data-animation="fadeInUp" data-animation-delay="200">
            <h1>Visit us on Facebook !</h1>
        </p>
        <div class="social-icos">
            <ul>

                <li class="animated" data-animation="flipInY" data-animation-delay="500">
                    <a href="https://www.facebook.com/pages/CM-Enterprise/674130269382494?ref=aymt_homepage_panel" target="_blank"><i class="fa fa-facebook"></i></a>
                </li>

            </ul>
        </div>
    </div>
</footer>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Current Event</h4>
            </div>
            <div class="modal-body">
                <img src="/img/events_banner_1.jpg" alt=""/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                <a href="/events/shimano-gran-fondo-2015" role="button" class="btn btn-primary">Register for this event</a>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="/js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="/js/bootstrap.js"></script>
<script type="text/javascript" src="/js/jquery.flexslider.js"></script>
<script type="text/javascript" src="/js/jquery.easytabs.min.js"></script>
<script type="text/javascript" src="/js/jquery.magnific-popup.js"></script>
<script type="text/javascript" src="/js/testimonialcarousel.js"></script>
<script type="text/javascript" src="/js/jquery.appear.js"></script>
<script type="text/javascript" src="/js/responsiveCarousel.js"></script>
<script type="text/javascript" src="/js/settings.js"></script>
<script type="text/javascript" src="/js/forms.js"></script>

<script>
    $(function() {
        $('#myModal').modal('show');
    });
</script>

</body>
</html>