<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><html class="no-js"><!-->  <!--<![endif]-->
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Tutorias Online 1.1</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/main.css">
        <link href="css/custom.css" rel="stylesheet">

        <!-- Custom Fonts & Icons -->
        <link rel="stylesheet" href="css/icomoon-social.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/sb-admin-2.css" type="text/css"/>
        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="js/jquery.min.js"></script>


    </head>

    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <header class="navbar navbar-inverse navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="Basica"></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.php">Inicio</a></li>                      
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ingreso <i class="icon-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="ingresar.php">Por formulario</a></li>
                                <li><a href="ingresar.php">Ingreso ONE-CLICK</a></li>
                            </ul>
                        </li>  
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Registro <i class="icon-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="registrar.php">Por formulario</a></li>
                                <li><a href="registrar.php">Registro ONE-CLICK</a></li>
                            </ul>
                        </li>  
                        <li class="dropdown" id="tutorias">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" 
                               >Buscar Tutorias <i class="icon-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="tutorias.php">Por hora</a></li>
                                <li><a href="tutorias.php">Por precio</a></li>
                                <li><a href="tutorias.php">Por votos</a></li>
                                <li><a href="tutorias.php">Por ubicación</a></li>
                                <li><a href="tutorias.php">Busqueda Avanzada</a></li>
                            </ul>
                        </li> 
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mi perfil <i class="icon-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="perfil.php">Eliminar Cuenta</a></li>
                                <li><a href="perfil.php">Desactivar Cuenta</a></li>
                                <li><a href="perfil.php">Modificar información personal</a></li>
                            </ul>
                        </li> 
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Soporte <i class="icon-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="soporte.php">Via Chat</a></li>
                                <li><a href="soporte.php">Via Email</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Acerca de <i class="icon-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="acerca_de.php">Sobre la empresa</a></li>
                                <li><a href="acerca_de.php">Origen página</a></li>
                                <li><a href="acerca_de.php">Objetivos Pagina</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </header><!--/header-->

        <section id="main-slider" class="no-margin">
            <div class="carousel slide">
                <ol class="carousel-indicators">
                    <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                    <li data-target="#main-slider" data-slide-to="1"></li>
                    <li data-target="#main-slider" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active" style="background-image: url(img/slides/1.jpg)">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="carousel-content centered">
                                        <h2 class="animation animated-item-1">Bienvenidos a las mejores tutorias del mundo :)</h2>
                                        <p class="animation animated-item-2">En ella encontrarás las mejores tutorias</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/.item-->
                    <div class="item" style="background-image: url(img/slides/2.jpg)">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="carousel-content center centered">
                                        <h2 class="animation animated-item-1">Busca tutorias de manera facil y rapida</h2>
                                        <p class="animation animated-item-2">Como universitarios debemos prepararnos, encontraremos rapidamente un tutor para ti :)</p>
                                        <br>
                                        <a class="btn btn-md animation animated-item-3" href="tutorias.php">Buscar Tutor</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/.item-->
                    <div class="item" style="background-image: url(img/slides/3.jpg)">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="carousel-content centered">
                                        <h2 class="animation animated-item-1">Informanos de sugerencias, ideas, reclamos y soporte</h2>
                                        <p class="animation animated-item-2">Estamos aqui para apoyarte, ayudanos con tu opinion, sugerencia o reclamo para hacer este el mejor servicio</p>
                                        <br>
                                        <a class="btn btn-md animation animated-item-3" href="soporte.php">Soporte</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/.item-->
                </div><!--/.carousel-inner-->
            </div><!--/.carousel-->
            <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
                <i class="icon-angle-left"></i>
            </a>
            <a class="next hidden-xs" href="#main-slider" data-slide="next">
                <i class="icon-angle-right"></i>
            </a>
        </section><!--/#main-slider-->
        <!-- Services -->
        <div class="section section-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="service-wrapper">
                            <i class="icon-book"></i>
                            <h3>Reserva tus tutorias</h3>
                            <p>Accede a través de la pagina a diversas tutorias que te ayudarán, 
                                tambien puedes modificarlas según tus necesidades</p>
                            <a href="tutorias.php" class="btn icon-search icon-2x"> Buscar Tutorias</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="service-wrapper">
                            <i class="icon-user"></i>
                            <h3>Modifica tu perfil</h3>
                            <p>Ingresa a tu perfil y modifica tus datos personales u horarios de tutoria</p>
                            <a href="perfil.php" class="btn icon-user icon-2x"> Cambiar perfil</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="service-wrapper">
                            <i class="icon-bell"></i>
                            <h3>Contactanos</h3>
                            <p>Avisanos en caso de alguna queja o reclamo, para eso estamos</p>
                            <a href="soporte.php" class="btn fa-bullhorn icon-2x"> Contactarnos</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Services -->
        <hr>
        <!-- Footer -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-footer col-md-4 col-xs-6">
                        <h3>Lineas de Contacto</h3>
                        <p class="contact-us-details">
                            <b>Email:</b> <a href="mailto:info@yourcompanydomain.com">info@yourcompanydomain.com</a>
                        </p>
                    </div>				
                    <div class="col-footer col-md-4 col-xs-6">
                        <h3>Acerca de...</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-copyright">&copy; 2017</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scrolling Nav JavaScript -->
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/scrolling-nav.js"></script>		
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>