<?php

class database {

    private $usuario;
    private $password;
    private $servidor;
    private $nomDB;
    private $link;

    function database() {
        $this->usuario = "root";
        $this->password = "";
        $this->servidor = "localhost";
        $this->nomDB = "tutorias";
        $this->link = "";
    }

    function conectarDB() {
        $this->link = mysqli_connect($this->servidor, $this->usuario, $this->password);
        mysqli_select_db($this->link, $this->nomDB);
        return mysqli_select_db($this->link, $this->nomDB);
    }

    function insertarDatos($fila = array(), $tabla = "") {
        $valoresFila = "";
        while (list($key, $val) = each($fila)) {
            $valoresFila = $valoresFila . " '" . $val . "', ";
        }
        $valoresFila = substr($valoresFila, 0, -2);
        $query = " insert into " . $tabla . " values( " . $valoresFila . ");";
        mysqli_query($this->link, $query)or die("la consulta fallo (insertar)" . mysqli_error($this->link));
        echo $query;
    }

    function verificarClientes($documento, $tabla = "") {
        $query = "select documento from " . $tabla . " where documento=" . $documento;
        $existe = mysqli_query($this->link, $query);
        $cantidad = mysqli_num_rows($existe);
        return $cantidad;
    }

    function actualizarDatos($campoReq = array(), $datosReq = array(), $campoBus = array(), $datosBus = array(), $tabla = "") {
        $actualizar = "update " . $tabla . " set ";
        foreach ($campoReq as $clave => $valor) {
            $actualizar = $actualizar . $valor . "= '";
            foreach ($datosReq as $clave_2 => $valor_2) {
                if ($clave == $clave_2) {
                    $actualizar = $actualizar . $valor_2 . "', ";
                } else {
                    continue;
                }
            }
        }
        $actualizar = substr($actualizar, 0, -2);
        $actualizar = $actualizar . " where ";
        foreach ($campoBus as $clave => $valor) {
            $actualizar = $actualizar . $valor . "= '";
            foreach ($datosBus as $clave_2 => $valor_2) {
                if ($clave == $clave_2) {
                    $actualizar = $actualizar . $valor_2 . "' and ";
                } else {
                    continue;
                }
            }
        }
        $actualizar = substr($actualizar, 0, -5);
        $actualizar = $actualizar . ";";
        $query = $actualizar;
        mysqli_query($this->link, $query)or die("la consulta fallo (insertar)" . mysqli_error($this->link));
        echo $query;
    }

    function seleccionDatos($campoReq = array(), $campoBus = array(), $datosBus = array(), $tabla = "") {
        //select "campo1,campo2" from "tabla" where "campo_req" ="dato" and "campo_req2" ="dato2"
        $seleccionar = "select ";
        foreach ($campoReq as $clave => $valor) {
            $seleccionar = $seleccionar . $valor . ", ";
        }
        $seleccionar = substr($seleccionar, 0, -2);
        $seleccionar = $seleccionar." from ".$tabla." where ";
        foreach ($campoBus as $clave => $valor) {
            $seleccionar = $seleccionar . $valor . "= '";
            foreach ($datosBus as $clave_2 => $valor_2) {
                if ($clave == $clave_2) {
                    $seleccionar = $seleccionar . $valor_2 . "' and ";
                } else {
                    continue;
                }
            }
        }
        $seleccionar = substr($seleccionar, 0, -5);
        $seleccionar = $seleccionar.";";
        $query=$seleccionar;
        $res = mysqli_query($this->link, $query);
        $revisar= mysqli_num_rows($res);
        return $revisar;
    }

}

//function crudSQL($fila = array(), $tabla = "", $opcion = "") {
//    switch ($opcion) {
//        case "INSERT":
//            $valoresFila = "";
//            while (list($key, $val) = each($fila)) {
//                $valoresFila = $valoresFila . " '" . $val . "', ";
//                echo $key;
//            }
//            $valoresFila = substr($valoresFila, 0, -2);
//            mysqli_query($this->link, " insert into " . $tabla . " values( " . $valoresFila . ");")or die("la consulta fallo (insertar)" . mysqli_errno($this->link));
//            break;
//        case "SELECT":
//            $valoresFila = "";
//
//            //select campos from tabla where idcampo=dato (opcional)and
//            break;
//        case "UPDATE":
//            break;
//    }
//}
?>