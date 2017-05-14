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

        <title>Mi perfil</title>

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
        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/accionesTutorias.js"></script>
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
                        <h1><i class="icon-book icon-2x"></i> Mi perfil</h1>
                    </div>
                </div>
            </div>
        </div>
        <h2>Hola: <?php echo $_SESSION['usuario'] ?></h2>
        <!-- Services -->
        <div class="section section-white">
            <div class="container">
                <div class="row">
                    <form method="post" action="php/controles.php">
                        <div class="col-md-4 col-sm-6">
                            <h3>Modificar Informacion Personal</h3>
                            <div class="service-wrapper">
                                <h3>Nombre: </h3>
                                <input class="form-control" id="nombre" name="nombre" type="text" disabled=""  value='<?php echo $_SESSION['nombre']; ?>' required>
                                <h3>Apellido: </h3>
                                <input class="form-control" id="apellido" name="apellido" type="text" disabled="" value='<?php echo $_SESSION['apellido']; ?>'  required>
                                <h3>Edad: </h3>
                                <input class="form-control" id="edad" name="edad" type="number" disabled="" value='<?php echo $_SESSION['edad']; ?>' required>
                                <h3>Tipo de documento: </h3>
                                <select class="form-control" id="tipoDocumento" name="tipoDocumento" disabled="" required>
                                    <option>Cedula de Ciudadania</option>
                                    <option>Tarjeta de Identidad</option>
                                </select> 
                                <h3>Número de documento: </h3>
                                <input class="form-control" id="documento" name="documento" type="number" disabled="" value='<?php echo $_SESSION['documento']; ?>' required>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="service-wrapper">

                                <br>
                                <h3>Tipo de usuario: </h3>
                                <select class="form-control"  id="tipoUsuario" name="tipoUsuario" disabled="" required>
                                    <option>Tutor</option>
                                    <option>Cliente</option>
                                </select>
                                <h3>Correo:</h3>
                                <input class="form-control" type="email" name="correo" id="correo" disabled="" value='<?php echo $_SESSION['correo']; ?>' required>
                                <h3>Telefono:</h3>
                                <input class="form-control" type="number" name="telefono" id="telefono" disabled="" value='<?php echo $_SESSION['telefono']; ?>' required>
                                <h3>Contraseña:</h3>
                                <input class="form-control" type="password" name="clave" id="clave" required disabled="">
                                <h3>Repetir Contraseña:</h3>
                                <input class="form-control" type="password" name="rep_clave" id="rep_clave" required disabled="">
                                <h3>Ubicación</h3>
                                <div id="map" style="width:300px; height:300px"></div>
                                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUPIcnUyUNSozzLevs2IO8eSvCtaD4ZOY&callback=geolocalizarUsuario"
                                async defer></script><br>
                                 <h2 id="mensaje">Espere mientras carga...</h2>
                                <input type="button" class="btn btn-default" id="boton1" value="Reiniciar ubicación">
                                <input type="hidden" name="lat" id="lat" value="" required/>
                                <input type="hidden" name="lon" id="lon" value="" required/>
                                <input class="btn btn-default" type="button" id="cambiarInfo" value="Cambiar Información">
                                <input class="btn btn-default" id="hacerCambios"  name="hacerCambios" type="submit" value="Aplicar Cambios" disabled="">
                            </div>
                        </div>
                    </form>
                    <div class="col-md-3 col-sm-6">
                        <form method="post" action="php/controles.php">
                            <div class="service-wrapper">
                                <i class="icon-user"></i>
                                <h3>Elimina tu cuenta</h3>
                                <p>Te iras para siempre de nuestra gran aplicación :(</p>
                                <button type="submit" class="btn btn-info btn-lg" name="desactivarUsuario">Eliminar tu cuenta</button>
                            </div>
                            <div class="service-wrapper">
                                <i class="icon-user"></i>
                                <h3>Cerrar tu sesion</h3>
                                <p>Solamente si estas cansado de vernos :(</p>
                                <button type="submit" class="btn btn-info btn-lg" name="salirSistema">Cerrar sesión</button>
                            </div>
                            <div class="service-wrapper">
                                <i class="icon-user"></i>
                                <h3>Califica tus tutorias</h3>
                                <p>Evalua a los tutores que has encontrado, asi mejoraras los servicios de la pagina</p>
                                <button type="submit" class="btn btn-info btn-lg" name="calificarTutorias">Calificar Tutorias</button>
                            </div>
                            <div class="service-wrapper">
                                <i class="icon-user"></i>
                                <h3>Mis tutorias</h3>
                                <p>Revisa las tutorias que tengas asignadas :D</p>
                                <a class="btn btn-info btn-lg" href="mis_tutorias.php">Revisar tutorias</a>
                            </div>
                        </form>
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
        <div class="modal fade" id="myModal2" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Eliminar Cuenta</h4>
                    </div>
                    <div class="modal-body">
                        <p>Desea eliminar tu cuenta?</p>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#">Si</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                    </div>
                </div>

            </div>
        </div>
        <div class="modal fade" id="myModal3" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Desactivar Cuenta</h4>
                    </div>
                    <div class="modal-body">
                        <p>Desea desactivar su cuenta?</p>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#">Si</button>
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