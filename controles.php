<?php
//Revisar que las tablas divisoras (m*m) sirvan
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
        $datosInsertar = [0, $_POST ['nombre'], $_POST['apellido'], $_POST['tipoDocumento'],
            $_POST['documento'], $_POST ['correo'], $_POST['universidad']
            , $_POST['telefono'], $_POST ['tipoCliente']
            , $_POST['usuario'], "ACTIVO", $_POST['clave']];
        $db2->insertarDatos($datosInsertar, "clientes");
    }
    require 'index.php';
} else {
    echo "<h1>Si me ves, es que no te sirvo :P</h1>";
}
//Actualizar datos Clientes
if (isset($_POST['hacerCambios'])) {
    $db2->conectarDB();
//    echo $db2->actualizarDatos($campo_espe, $campos, $fila, "cleintes", $datos);
}
//Loguearse

//Insertar y verificar tutorias

//Actualizar datos Tutorias