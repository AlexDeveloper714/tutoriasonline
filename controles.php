<?php

//$_SESSION (Permanente si las paginas que tienen session la inician)
//Revisar que las tablas divisoras (m*m) sirvan
session_start();
require_once 'database.php';
$db2 = new database();
//Insertar y verificar Clientes
if (isset($_POST['enviarCliente'])) {
    $db2->conectarDB();
    if ($db2->verificarClientes($_POST ['documento'], "clientes") > 0) {
        echo "<h1>
           Cedula ya registrada, retrocediendo...
       </h1>";
        echo "<script type=\"text/javascript\">
            setTimeout(function(){ history.go(-1); },500);
       </script>";
        exit;
    } else {
        $datosReq = [0, $_POST ['nombre'], $_POST['apellido'], $_POST['tipoDocumento'],
            $_POST['documento'], $_POST ['correo'], $_POST['universidad']
            , $_POST['telefono'], $_POST ['tipoCliente']
            , $_POST['usuario'], "ACTIVO", $_POST['clave']];
        $db2->insertarDatos($datosReq, "clientes");
    }
    require 'index.php';
}
//Actualizar datos Clientes
if (isset($_POST['hacerCambios'])) {
    $db2->conectarDB();
//    echo $db2->actualizarDatos($campo_espe, $campos, $fila, "cleintes", $datos);
}

//Experimento exitoso :D
if (isset($_POST['cambiarDatos'])) {
    $db2->conectarDB();
//    $datosReq=[$_POST ['nombre'], $_POST['apellido']];
//    $camposReq=["nombre","apellido"];
//    $datosBusq=[$_POST["documento"]];
//    $camposBus=["documento"];
//    $db2->actualizarDatos($camposReq, $datosReq, $camposBus, $datosBusq, "clientes");
}
//Comprobar errores PHP :D
//else {
//    echo "<h1>Si me ves, es que no te sirvo :P</h1>";
//    }

//Loguearse
//if(isset($_POST['entrarSistema']))
if (isset($_POST['entrarSistema'])) {
    $db2->conectarDB();
    //Mejorar select OJO
//    if ($db2->verificarClientes($_POST ['documento'], "clientes") > 0) {
//        $_SESSION['usuario'] = $_POST ['documento'];
//        echo "Bienvenido " . $_POST['documento'] . ":D";
//    } else {
//        echo "No eres un usuario certificado :P";
//    }
//    require 'PruebaUpdate.php';
}
//Cerrar sesion
//if(isset($_POST['salirSistema']))
if (isset($_POST['salirSistema'])) {
    $_SESSION['usuario'] = "";
    require 'PruebaUpdate.php';
}
//Insertar y verificar tutorias
if (1 == 2) {
    $db2->conectarDB();
    //Cambiar condiciones
    if ($db2->verificarClientes($_POST ['documento'], "clientes") > 0) {
        echo "<h1>
           Cedula ya registrada, retrocediendo...
       </h1>";
        echo "<script type=\"text/javascript\">
            setTimeout(function(){ history.go(-1); },500);
       </script>";
        exit;
    } else {
        
    }
}
//Actualizar datos Tutorias
if (1 == 2) {
    $db2->conectarDB();
    //Cambiar condiciones
    if ($db2->verificarClientes($_POST ['documento'], "clientes") > 0) {
        echo "<h1>
           Cedula ya registrada, retrocediendo...
       </h1>";
        echo "<script type=\"text/javascript\">
            setTimeout(function(){ history.go(-1); },500);
       </script>";
        exit;
    } else {
        
    }
}    