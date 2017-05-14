<?php

@session_start();

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
        $actualizar = substr($actualizar, 0, -2) . " where ";
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
        $actualizar = substr($actualizar, 0, -5) . ";";
        $query = $actualizar;
        mysqli_query($this->link, $query)or die("la consulta fallo (insertar)" . mysqli_error($this->link));
    }

    function seleccionDatos($campoReq = array(), $campoBus = array(), $datosBus = array(), $tabla = "") {
        //select "campo1,campo2" from "tabla" where "campo_req" ="dato" and "campo_req2" ="dato2"
        $seleccionar = "select ";
        foreach ($campoReq as $clave => $valor) {
            $seleccionar = $seleccionar . $valor . ", ";
        }
        $seleccionar = substr($seleccionar, 0, -2) . " from " . $tabla . " where ";
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
        $seleccionar = substr($seleccionar, 0, -5) . ";";
        $query = $seleccionar;
        $res = mysqli_query($this->link, $query);
        echo $query;
        while ($row = mysqli_fetch_array($res)) {
            $_SESSION["nombre"] = $row[1];
            $_SESSION["apellido"] = $row[2];
            $_SESSION["edad"] = $row[3];
            $_SESSION["tipoDocumento"] = $row[4];
            $_SESSION["documento"] = $row[5];
            $_SESSION["correo"] = $row[6];
            $_SESSION["telefono"] = $row[8];
            $_SESSION["tipoUsuario"] = $row[9];
            $_SESSION["usuario"] = $row[10];
        }
        $res = mysqli_query($this->link, $query);
        return $res;
    }

    function selectorOption($tabla = "", $campo = "", $dato = "", $campoEspeci = "") {
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