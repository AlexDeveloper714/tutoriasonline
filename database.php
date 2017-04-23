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

    function conectar() {
        $this->link = mysqli_connect($this->servidor, $this->usuario, $this->password);
        mysqli_select_db($this->link, $this->nomDB);
    }

    function insertar($fila = array(), $tabla = "") {
        $valoresFila = "";
        while (list($key, $val) = each($fila)) {
            $valoresFila = $valoresFila . " '" . $val . "', ";
            echo $key;
        }
        $valoresFila = substr($valoresFila, 0, -2);
        mysqli_query($this->link, " insert into " . $tabla . " values( " . $valoresFila . ");")or die("la consulta fallo (insertar)" . mysqli_error($this->link));
    }

    function verificarIdClientes($documento, $tabla = "") {
        $query = "select documento from " . $tabla . " where documento=" . $documento;
        $existe = mysqli_query($this->link, $query);
        $cantidad = mysqli_num_rows($existe);
        return $cantidad;
    }

    function crudSQL($fila = array(), $tabla = "", $opcion = "") {
        switch ($opcion) {
            case "INSERT":
                $valoresFila = "";
                while (list($key, $val) = each($fila)) {
                    $valoresFila = $valoresFila . " '" . $val . "', ";
                    echo $key;
                }
                $valoresFila = substr($valoresFila, 0, -2);
                mysqli_query($this->link, " insert into " . $tabla . " values( " . $valoresFila . ");")or die("la consulta fallo (insertar)" . mysqli_errno($this->link));
                break;
            case "SELECT":
                $valoresFila = "";

                //select campos from tabla where idcampo=dato (opcional)and
                break;
            case "UPDATE":
                break;
        }
    }

    function actualizarActivos($fila = array(), $tabla = "", $id_Activo = "") {
        $actualizar = "update " . $tabla . " set tipo_activo='$fila[0]', "
                . "categoria='$fila[1]', marca='$fila[2]', modelo='$fila[3]',"
                . " descripcion='$fila[4]', notas='$fila[5]' where id_activos='$id_Activo'";
        $res = mysqli_query($this->link, $actualizar)or die("la consulta fallo (insertar)" . mysqli_error($this->link));
        return $res;
    }

    function actualizar($fila = array(), $tabla = "", $idCliente = "") {
        $actualizar = "update " . $tabla . " set correo='$fila[0]', num_hijos='$fila[1]', ruta='$fila[2]' where id_cliente='$idCliente'";
        mysqli_query($this->link, $actualizar) and mysql_info();
    }

    function insertarActivo($fila = array(), $tabla = "") {
        $valoresFila = "";
        while (list($key, $val) = each($fila)) {
            $valoresFila = $valoresFila . " '" . $val . "', ";
        }
        $valoresFila = substr($valoresFila, 0, -2);
//quitar en sql_error($link) si no es link + $this-> link
        mysqli_query($this->link, " insert into " . $tabla . " values( " . $valoresFila . ");")or die("la consulta fallo(insertarActivo)" . mysqli_error($this->link));
    }

    function consultarDB($tabla = "", $campo = "", $dato = "", $campoEspeci = "") {
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

?>