<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><html class="no-js"><!-->  <!--<![endif]-->
<?php
@session_start();
?>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta id="sesion" content="<?php echo $_SESSION['usuario']; ?>">

        <title>Busqueda de tutorias</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="/maps/documentation/javascript/demos/demos.css">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/main.css">
        <link href="css/custom.css" rel="stylesheet">

        <!-- Custom Fonts & Icons -->
        <link rel="stylesheet" href="css/icomoon-social.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/sb-admin-2.css" type="text/css"/>

        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="js/accionesTutorias.js"></script>
        <script src="js/googleMaps.js"></script>


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
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.php">Inicio</a></li>                      
                    <li>
                        <a href="ingresar.php" id="ingreso">Ingreso</a>
                    </li>  
                    <li>
                        <a href="registrar.php" id="registro">Registro</a>
                    </li>  
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Buscar Tutorias <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="tutorias.php">Por hora</a></li>
                            <li><a href="tutorias.php">Por precio</a></li>
                            <li><a href="tutorias.php">Por votos</a></li>
                            <li><a href="tutorias.php">Por ubicación</a></li>
                            <li><a href="tutorias.php">Busqueda Avanzada</a></li>
                        </ul>
                    </li> 
                    <li class="dropdown">
                        <a href="perfil.php" id="perfil">Mi perfil</a>
                    </li> 
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Soporte <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="soporte.php">Via Chat</a></li>
                            <li><a href="soporte.php">Via Email</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="acerca_de.php">Acerca de</a>
                    </li>
                </ul>
            </div>
        </header><!--/header--><!-- Page Title -->
        <div class="section section-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1><i class="icon-book  icon-2x"></i> Busqueda de tutorias</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3  col-md-offset-2 col-sm-6">
                <h1>Mapa de tutorias</h1>
                <br><br>
                <div id="map" style="width:300px; height:300px"></div>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUPIcnUyUNSozzLevs2IO8eSvCtaD4ZOY&callback=buscarTutores"
                async defer></script>
            </div>
            <h2 id="mensaje">Espere mientras carga...</h2>
            <input type="button" class="btn btn-default" id="boton1" value="Reiniciar ubicación">
            <input type="hidden" name="lat" id="lat" value="" required/>
            <input type="hidden" name="lon" id="lon" value="" required/>
            <form  method="post" action="control.php">
                <div class="col-md-6 col-sm-6">
                    <div class="service-wrapper">
                        <h1>Busqueda de tutorias</h1>
                        <div class="col-md-6 col-sm-6">
                            <h1>Por hora</h1>
                            <input class="form-control" type="text" id="hora">
                            <h1>Por precio</h1>
                            <input class="form-control" type="text" id="precio">
                            <h1>Por ubicación</h1>
                            <input class="form-control" type="text" id="ubicacion">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <h1>Por votos</h1>
                            <input class="form-control" type="text" id="filtro">
                            <h1>Busqueda Avanzada</h1>
                            <select class="form-control">
                                <option>Por hora</option>
                                <option>Por materia</option>
                                <option>Por ubicación</option>
                                <option>Por precio</option>
                                <option>Por votos</option>
                            </select>                        <br>
                            <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal">buscar</button>

                        </div>
                        <br>
                    </div>
                </div>
            </form>
        </div>
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