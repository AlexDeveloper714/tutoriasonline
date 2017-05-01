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
    
    function actualizarDatos($campo_espe = array(), $campos = array(), $fila = array(), $tabla = "", $datos = array()) {
        //update TABLA set COLUMNA1="" and COLUMNA2="".... where COLUMNA REQUERIDA=$dato[0] and COLUMNA REQUERIDA_2=$dato[1]..."
        $actualizar = "update " . $tabla . " set ";
        //Necesidad de recorrer 2 arrays
        while (list($key, $val) = each($campos)) {
            $actualizar = $actualizar . $val . "', ";
        }
        $actualizar = substr($actualizar, 0, -2);
        $actualizar = $actualizar . " where ";
        //Necesidad de recorrer 2 arrays
        while (list($key, $val) = each($campo)) {
            $actualizar = $actualizar . $val . "= '" . $val . "' and ";
        }
        $actualizar = substr($actualizar, 0, -4);
        $query = $actualizar;
        echo $query;
    }

    function seleccionDatos($tabla = "", $campo = "", $dato = "", $campoEspeci = "") {
        if ($campo == "") {
            $query = "select * from " . $tabla;
        } else if ($dato == "") {
            $query = "select " . $campo . " from " . $tabla;
        } else if ($campoEspeci == "") {
            $query = "select * from " . $tabla . " where " . $campo . " = " . $dato;
        } else {
            $query = "select " . $campoEspeci . " from " . $tabla . " where " . $campo . " = " . $dato;
        }
        $res = mysqli_query($this->link, $query);
        return $res;
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