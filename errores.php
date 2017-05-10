<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8] <html class="no-js"> ><!--> <!--<![endif]-->
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

        <title>Error no especificado</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/main.css">
        <link href="css/custom.css" rel="stylesheet">

        <!-- Custom Fonts & Icons -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/icomoon-social.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/accionesTutorias.js"></script>
        <script src="js/accionesTutorias.js"></script>

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
                        <li>
                            <a href="ingresar.php">Ingreso</a>
                        </li>  
                        <li>
                            <a href="registrar.php">Registro</a>
                        </li>  
                        <li>
                            <a href="#" class="dropdown-toggle"  id="perfil_col" data-toggle="dropdown">Buscar Tutorias <i class="icon-angle-down"></i></a>
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
            </div>
        </header><!--/header-->

        <!-- Page Title -->
        <div class="section section-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1><i class="icon-question"></i> Error no especificado</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <h1>Error en el ingreso, registro u otro tipo</h1>
                        <p>Ocurre al momento de iniciar sesión, ya sea
                            por una clave mal digitada o porque tu usuario
                            este inactivo, si este es el caso comunicate con 
                            la pestaña de soporte :D
                        </p>
                        <p>Tambien ocurre al momento de registrarte, debido a que ese
                            usuario ya existe en el sistema :/
                        </p>
                        <a href="javascript:history.back(1)" >Retorna a la pagina anterior</a>
                    </div>
                </div>
            </div>
        </div>
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

        <!-- Javascripts -->
        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <!-- Scrolling Nav JavaScript -->
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/scrolling-nav.js"></script>		

    </body>
</html>