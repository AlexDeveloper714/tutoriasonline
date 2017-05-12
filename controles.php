<?php
//Revisar que las tablas divisoras (m*m) sirvan
@session_start();
require_once 'database.php';
$db2 = new database();
//Loguearse OK
if (isset($_POST['entrarSistema'])) {
    $db2->conectarDB();
    $camposReq = ["*"];
    $datosBus = [$_POST ['usuario'], $_POST['clave'], "ACTIVO"];
    $camposBus = ["usuario", "clave", "estadoUsuario"];
    $db2->seleccionDatos($camposReq, $camposBus, $datosBus, "clientes");
    if ($_SESSION["usuario"] != "") {
        require 'perfil.php';
    } else {
        $_SESSION['usuario'] = "";
        $_SESSION['tipoUsuario'] = "";
        header("Location: errores.php");
    }
}
//Cerrar sesion OK
if (isset($_POST['salirSistema'])) {
    if ($_SESSION['usuario'] != "") {
        $_SESSION['usuario']="";
    }
    require 'index.php';
}
//Insertar y verificar Clientes OK
if (isset($_POST['enviarCliente'])) {
    $db2->conectarDB();
    if ($db2->verificarClientes($_POST ['documento'], "clientes") > 0) {
        header("Location: errores.php");
    } else {
        $datosReq = [0, $_POST ['nombre'], $_POST['apellido'], $_POST['edad'], $_POST['tipoDocumento'],
            $_POST['documento'], $_POST ['correo'], $_POST['universidad']
            , $_POST['telefono'], $_POST ['tipoCliente']
            , $_POST['usuario'], "ACTIVO", $_POST['clave']];
        $db2->insertarDatos($datosReq, "clientes");
    }
    require 'index.php';
}
//Insertar y verificar tutorias 1/2
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
//Actualizar datos Usuario OK
if (isset($_POST['hacerCambios'])) {
    $db2->conectarDB();
    $datosReq = [$_POST ['nombre'], $_POST['apellido'], $_POST['edad'], $_POST['tipoDocumento'], $_POST['documento'], $_POST['tipoUsuario'], $_POST['correo'], $_POST['telefono'], $_POST['clave']];
    $camposReq = ["nombre", "apellido", "edad", "tipoDocumento", "documento", "tipoCliente", "correo", "telefono", "clave"];
    $datosBusq = [$_SESSION['usuario'], $_SESSION['tipoUsuario']];
    $camposBus = ["usuario", "tipoCliente"];
    $db2->actualizarDatos($camposReq, $datosReq, $camposBus, $datosBusq, "clientes");
    require 'perfil.php';
}
//Actualizar datos Tutorias 1/2
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
//"Eliminar"  usuario OK
if (isset($_POST['desactivarUsuario'])) {
    $db2->conectarDB();
    $datosReq = ["INACTIVO"];
    $camposReq = ["estadoUsuario"];
    $datosBusq = [$_SESSION['usuario']];
    $camposBus = ["usuario"];
    $db2->actualizarDatos($camposReq, $datosReq, $camposBus, $datosBusq, "clientes");
    session_destroy();
    require 'index.php';
}
