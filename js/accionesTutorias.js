function formCliente() {
    $('#tutorias').hide();
    $('#cambiarInfo').click(
            function () {
                $('#nombre').removeAttr("disabled").focus();
                $('#apellido').removeAttr("disabled").focus();
                $('#tipoDocumento').removeAttr("disabled").focus();
                $('#documento').removeAttr("disabled").focus();
                $('#tipoUsuario').removeAttr("disabled").focus();
                $('#edad').removeAttr("disabled").focus();
                $('#hacerCambios').removeAttr("disabled").focus();
                $('#map').show();
            }
    );
    $('#dataTables-example').DataTable({
        responsive: true
    });
    $('#dataTables-example_2').DataTable({
        responsive: true
    });
}


