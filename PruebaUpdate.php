<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="controles.php" method="post">
            <h3>Prueba de Login-Logout</h3>
            <h3>Bienvenido: <?php echo $_SESSION['usuario'] ?></h3>
            <!--            <br><h2>Nombre</h2>
                        <input name="nombre" required>
                        <br><h2>Apellido</h2>
                        <input name="apellido" required>
                        <br><h2>Numero documento</h2>
                        <input name="documento" required>    
               <input type="submit" name="cambiarDatos" value="actualizar datos">-->
            <br><h2>Numero documento</h2>
            <input name="documento" required> 
            <input type="submit" name="entrarSistema" value="actualizar datos">
            <input type="submit" name="salirSistema" value="actualizar datos">

        </form>
    </body>
</html>
