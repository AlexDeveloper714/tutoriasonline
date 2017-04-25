<?php

require_once 'database.php';
$db2 = new database();

if (isset($_POST['enviarCliente'])) {
    echo $db2->conectar();    
    if ($db2->verificarIdClientes($_POST ['documento'], "clientes") > 0) {
        echo "<h1>
           Cedula ya registrada, retrocediendo...
       </h1>";
        echo "<script type=\"text/javascript\">
            setTimeout(function(){ history.go(-1); },500);
       </script>";
        exit;
    } else {
        echo $db2->insertar(array(0,$_POST ['nombre'], $_POST['apellido'], $_POST['tipoDocumento'],
            $_POST['documento'], $_POST ['correo'], $_POST['universidad']
            , $_POST['telefono'], $_POST ['tipoCliente']
            ,$_POST['usuario'], "ACTIVO",$_POST['clave']), "clientes");
    }
	require 'index.php';
}

if (isset($_POST['enviarActivo'])) {
    $db2->conectar();
    $db2->insertarActivo(array(0, $_POST['tipoActivo'], $_POST['idCliente'],
        $_POST['categoria'], $_POST ['marca'], $_POST['modelo'], $_POST['describir'], $_POST['notas']), "activos");
    require 'index.php';
}

if (isset($_POST['actualizarActivo'])) {
    $db2->conectar();
    $db2->actualizarActivos(array($_POST['tipoActivo'],
        $_POST['categoria'], $_POST ['marca'], $_POST['modelo'], $_POST['describir'], $_POST['notas']), "activos", $_POST ['idActivo']);
    header("Location: datos_usuario.php?id_Cliente=" . $_POST['cedula']);
}

if (isset($_POST['actualizarDatos'])) {
    $db2->conectar();
    $foto = $_FILES["file"]["name"];
    $trozos = explode(".", $foto);
    $ruta = $_FILES["file"]["tmp_name"];
    $exten = $_POST['cedula'] . "." . end($trozos);
    $query = mysql_query("select ruta from clientes where id_cliente=" . $_POST['cedula']);
    while ($row = mysql_fetch_array($query)) {
        $anterior = $row[0];
    }
    $destino = "img/" . $foto;
    $destino2 = "img/" . $exten;
    $db2->actualizar(array($_POST['correo'], $_POST['hijos'], $destino2), "clientes", $_POST['cedula']);
    unlink($anterior);
    copy($ruta, $destino);
    rename($destino, $destino2);
    header("Location: datos_usuario.php?id_Cliente=" . $_POST['cedula']);
}
?>
