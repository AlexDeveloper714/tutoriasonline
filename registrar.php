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

        <title>Registro tutorias</title>
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
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <script src="js/jquery-1.9.1.min.js"></script>
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
        </header><!--/header-->

        <!-- Page Title -->
        <div class="section section-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1><i class="icon-user icon-2x"></i> Registro</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-white">
            <div class="row">
                <form  method="post" action="controles.php">
                    <div class="col-md-12 col-sm-6">
                        <div class="service-wrapper">
                            <h1>Registro por formulario</h1>
                            <div class="col-md-4 col-sm-6">
                                <h2>Nombre:</h2>
                                <input class="form-control" type="text" name="nombre" required>
                                <h2>Apellido:</h2>
                                <input class="form-control" type="text" name="apellido" required>
                                <h2>Tipo de documento:</h2>
                                <select class="form-control" name="tipoDocumento" required>
                                    <option>Cedula de Ciudadania</option>
                                    <option>Tarjeta de Identidad</option>
                                </select>
                                <h2>Número de Documento:</h2>
                                <input class="form-control" type="number" name="documento" required>
                                <h2>Telefono:</h2>
                                <input class="form-control" type="number" name="telefono" required>    
                                <h2>Edad: </h2>
                                <input class="form-control" id="edad" name="edad" type="number" required>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <h2>Correo:</h2>
                                <input class="form-control" type="email" name="correo" required>
                                <h2>Nombre de Usuario:</h2>
                                <input class="form-control" type="text" name="usuario" required>
                                <h2>Contraseña:</h2>
                                <input class="form-control" type="password" name="clave" id="clave" required>
                                <h2>Repetir Contraseña:</h2>
                                <input class="form-control" type="password" name="rep_clave" id="rep_clave" required>
                                <div class="checkbox col-xs-4">
                                    <label>
                                        <input type="checkbox" value="" id="mostrarPass">Ver pasaword
                                    </label>
                                </div>
                                <h2>Tipo de usuario:</h2>
                                <select class="form-control" name="tipoCliente" required>
                                    <option>Tutor</option>
                                    <option>Cliente</option>
                                </select>                               
                                <h2>Universidad:</h2>
                                <select name="universidad"class="form-control" required>
                                    <?php
                                    require_once 'database.php';
                                    $db = new database();
                                    $db->conectarDB();
                                    $res = $db->selectorOption("universidades", "nombreUniversidad");
                                    while ($row = mysqli_fetch_array($res)) {
                                        echo '<option>';
                                        echo $row['nombreUniversidad'];
                                        echo '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <h1>Ubicación Google Maps</h1>
                                <br><br>
                                <div id="map" style="width:400px; height:300px">
                                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUPIcnUyUNSozzLevs2IO8eSvCtaD4ZOY&callback=geolocalizarUsuario"
                                    async defer></script><br>
                                </div>
                                <h2 id="mensaje">Espere mientras carga...</h2>
                                <button type="button" class="btn btn-info btn-lg" id="boton1">Reiniciar ubicación</button>
                                <input type="hidden" name="lat" id="lat" name="lat" value="" required/>
                                <input type="hidden" name="lon" id="lon" name="lon" value="" required/>
                                <button type="submit" class="btn btn-info btn-lg" name="enviarCliente" id="registrarCliente">Registrarse</button>
                                <!--
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Registrarse</button>     
                                -->
                                <br><br><div class="g-recaptcha" data-sitekey="6Ld3xxsUAAAAACt4vAxudeP10SOh610QowDDgayA"></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
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
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Confirmación Registro</h4>
                    </div>
                    <div class="modal-body">
                        <p>Desea confirmar su registro con los siguientes datos?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default" data-toggle="modal" id="enviarCliente">Si</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
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