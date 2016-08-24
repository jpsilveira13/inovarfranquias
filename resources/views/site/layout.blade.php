
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inovar Franquia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Inovar Franquias" />
    <meta name="keywords" content="Franquias, Franquia, Brasil Franquia, Inovar, Locações, Inovar Franquia" />
    <meta name="author" content="João Paulo da Silveira" />

    <!-- Facebook and Twitter Integração -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Local Favicon -->
    <link rel="shortcut icon" href="favicon.ico">


    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,400italic,700' rel='stylesheet' type='text/css'>

    <!-- Animate.css -->
    <link rel="stylesheet" href="/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="/css/icomoon.css">
    <!-- Simple Line Icons -->
    <link rel="stylesheet" href="/css/simple-line-icons.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="/css/owl.carousel.min.css">

    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="/css/bootstrap.css">

    <link rel="stylesheet" href="/css/style.css">

    <link rel="stylesheet" id="theme-switch" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.3.15/slick.css"/>
    <link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/jquery.slick/1.5.8/slick-theme.css"/>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.1/ekko-lightbox.min.css" rel="stylesheet">

    <style>

        #colour-variations {
            padding: 10px;
            -webkit-transition: 0.5s;
            -o-transition: 0.5s;
            transition: 0.5s;
            width: 140px;
            position: fixed;
            left: 0;
            top: 100px;
            z-index: 999999;
            background: #fff;
            /*border-radius: 4px;*/
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
            -webkit-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
            -moz-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
            -ms-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
            box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
        }
        #colour-variations.sleep {
            margin-left: -140px;
        }
        #colour-variations h3 {
            text-align: center;;
            font-size: 11px;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: #777;
            margin: 0 0 10px 0;
            padding: 0;;
        }
        #colour-variations ul,
        #colour-variations ul li {
            padding: 0;
            margin: 0;
        }
        #colour-variations li {
            list-style: none;
            display: inline;
        }
        #colour-variations li a {
            width: 20px;
            height: 20px;
            position: relative;
            float: left;
            margin: 5px;
        }
        #colour-variations li a[data-theme="style"] {
            background: #6173f4;
        }
        #colour-variations li a[data-theme="pink"] {
            background: #f64662;
        }
        #colour-variations li a[data-theme="blue"] {
            background: #2185d5;
        }
        #colour-variations li a[data-theme="turquoise"] {
            background: #00b8a9;
        }
        #colour-variations li a[data-theme="orange"] {
            background: #ff6600;
        }
        #colour-variations li a[data-theme="lightblue"] {
            background: #5585b5;
        }
        #colour-variations li a[data-theme="brown"] {
            background: #a03232;
        }
        #colour-variations li a[data-theme="green"] {
            background: #65d269;
        }

        .option-toggle {
            position: absolute;
            right: 0;
            top: 0;
            margin-top: 5px;
            margin-right: -30px;
            width: 30px;
            height: 30px;
            background: #f64662;
            text-align: center;
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
            color: #fff;
            cursor: pointer;
            -webkit-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
            -moz-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
            -ms-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
            box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
        }
        .option-toggle i {
            top: 2px;
            position: relative;
        }
        .option-toggle:hover, .option-toggle:focus, .option-toggle:active {
            color:  #fff;
            text-decoration: none;
            outline: none;
        }
    </style>
    <!-- End demo purposes only -->


    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.6&appId=190387111301918";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<header role="banner" id="fh5co-header">
    <div class="border-topo-bottom hidden-xs hidden-sm">
        <div class="container">
            <div class="col-md-5 pull-right pd5">
                <div class="icone-facebook pull-right">
                    <span><a class="font-texto-branca" href="https://www.facebook.com/inovarlocacoesbr" target="_blank" title="Facebook Inovar Locações" alt="Facebook Inovar Locações"> <i class="fa fa-facebook  fa-lg" aria-hidden="true"></i></a></span>
                </div>
                <div class="texto-telefone pr26 pull-right">
                    <span class="font-texto-branca">+55 34 3314-8702 | 34 3325-8700</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <!-- <div class="row"> -->
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <!-- Mobile Toggle Menu Button -->
                <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
                <a class="navbar-brand" alt="Logotipo Inovar Franquia" title="Inovar Franquias" href="#"><img src="{{url('images/logo-top.png')}}" /></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#" data-nav-section="home"><span>Home</span></a></li>
                    <li><a href="#" data-nav-section="about"><span>Sobre a Inovar</span></a></li>
                    <li><a href="#" data-nav-section="services"><span>Seja um Franqueado</span></a></li>
                    <!--<li><a href="#" data-nav-section="features"><span></span></a></li> -->
                    <li><a href="#" data-nav-section="press"><span>Contato</span></a></li>
                </ul>
            </div>
        </nav>
        <!-- </div> -->
    </div>
</header>

@yield('content')
<div id="fh5co-press" class="pt48 bgEscuro borda-rodape pb0" data-section="press">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-heading text-center">
                <div id="alinhamento-texto" class="col-md-4 text-left">
                    <h3 class="cor-texto">INOVAR LOCAÇÕES</h3>
                    <br />
                    <p>Av. Sete,256 Lotes 7 e 8 Quadra 4b</p>
                    <p>Distrito Industrial II, Uberaba - MG</p>
                    <p>CEP: 38064-735</p>
                    <br />
                    <p>Tel: -55 34 3314-8702 | 34 3325-8700</p>
                    <p>Email: expansao@inovarlocacoes.com.br</p>
                </div>
                <div id="alinhamento-texto-supo"class="col-md-4">
                    <h3 class="cor-texto">SUPORTE</h3>
                    <br />
                    <nav id="menu-footer">
                        <ul>
                            <li><a href="#">Fale Consoco</a> </li>
                            <li><a href="#">Seja um Franqueado</a> </li>

                        </ul>
                    </nav>
                </div>
                <div class="col-md-4">

                    <br />
                    <div class="fb-page" data-href="https://www.facebook.com/inovarlocacoesbr" data-small-header="true" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/inovarlocacoesbr"><a href="https://www.facebook.com/inovarlocacoesbr">Inovar Locações - Brasil</a></blockquote></div></div>
                </div>
            </div>
        </div>
    </div>
</div>


<footer id="footer" class="pb0" role="contentinfo">
    <div class="container">
        <div class="row row-bottom-padded-sm">
            <div class="col-md-12">
                <img src="{{url('images/logo-fotter.png')}}" class="img-responsive" />
                <p class="copyright">&copy; Copyright 2016 <b>Inovar Locações</b> - TODOS OS DIREITOS RESERVADOS.</p>
            </div>
        </div>
    </div>
</footer>


<!-- jQuery -->
<script src="/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="/js/jquery.waypoints.min.js"></script>
<!-- Owl Carousel -->
<script src="/js/owl.carousel.min.js"></script>

<!-- For demo purposes only styleswitcher ( You may delete this anytime ) -->
<script src="/js/jquery.style.switcher.js"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<script src="{{asset('js/validator.js')}}"></script>
<!-- End demo purposes only -->

<!-- Main JS (Do not remove) -->


<script src="/js/main.js"></script>

<script src="/js/fichaSelecao.js"></script>
<script src="/js/jqueryMask.js"></script>



<script src="//cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.1/ekko-lightbox.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<script src="/js/pega-cidade.js"></script>
<script src="/js/jqueryMask.js"></script>
<!-- Google Code for Convers&atilde;o Leads Conversion Page In your html page, add the snippet and call goog_report_conversion when someone clicks on the chosen link or button. --> <script type="text/javascript">
    /* <![CDATA[ */
    goog_snippet_vars = function() {
        var w = window;
        w.google_conversion_id = 962471746;
        w.google_conversion_label = "yGoCCJD57mcQws74ygM";
        w.google_remarketing_only = false;
    }
    // DO NOT CHANGE THE CODE BELOW.
    goog_report_conversion = function(url) {
        goog_snippet_vars();
        window.google_conversion_format = "3";
        var opt = new Object();
        opt.onload_callback = function() {
            if (typeof(url) != 'undefined') {
                window.location = url;
            }
        }
        var conv_handler = window['google_trackConversion'];
        if (typeof(conv_handler) == 'function') {
            conv_handler(opt);
        }
    }
    /* ]]> */
</script>
<script type="text/javascript"
        src="//www.googleadservices.com/pagead/conversion_async.js">
</script>

</body>
</html>
