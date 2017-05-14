<!DOCTYPE html>
<?php
@session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AJAX</title>
        <script src="js/API/jquery-1.9.1.min.js"></script>
        <script src="js/Acciones/accionesTutorias.js"></script>
    </head>
    <body>
        <h3>Prueba de AJAX</h3>
        <br><h2>Documento</h2>
        <input id="documento_2" name="documento" required>
        <input type="button" id="AjaxButton" value="actualizar datos">
        <div id="cargaexterna">Aquí se mostrarán los parámetros enviados</div>
    </body>
</html>
