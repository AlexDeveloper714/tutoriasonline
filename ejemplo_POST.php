<table>
    <thead>
        <tr>
            <th>id-Cliente</th>
            <th>nombre</th>
            <th>apellido</th>
            <th>edad</th>
            <th>tipo documento</th>
            <th>documento</th>
            <th>correo</th>
            <th>universidad</th>
            <th>telefono</th>
            <th>tipoCliente</th>
            <th>usuario</th>
            <th>clave</th>
            <th>latitud</th>
            <th>longitud</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $documento = $_POST['documento'];
        require_once 'database.php';
        $db2 = new database();
        $db2->conectarDB();
        $campoReq=["*"];
        $campoBus=["documento"];
        $datosBus=[$documento];
        $rec =$db2->seleccionDatos($campoReq, $campoBus, $datosBus, "clientes");
        while ($row = mysqli_fetch_array($rec)) {
            echo "<tr>";
            echo "<td>$row[0]</td>";
            echo "<td>$row[1]</td>";
            echo "<td>$row[3]</td>";
            echo "<td>$row[4]</td>";
            echo "<td>$row[5]</td>";
            echo "<td>$row[6]</td>";
            echo "<td>$row[7]</td>";
            echo "<td>$row[8]</td>";
            echo "<td>$row[9]</td>";
            echo "<td>$row[10]</td>";
            echo "<td>$row[11]</td>";
            echo "<td>$row[12]</td>";
            echo "<td>$row[13]</td>";
            echo "<td>$row[14]</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>