function formCliente() {
    var title = document.title;
    switch (title) {
        case "Mi perfil":
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
                        $("#correo").removeAttr("disabled").focus();
                        $("#telefono").removeAttr("disabled").focus();
                        $("#clave").removeAttr("disabled").focus();
                        $("#rep_clave").removeAttr("disabled").focus();
                    }
            );
            break;
        case "Ingreso tutorias":
            break;
        case "Registro tutorias":
            break;
        case "tutorias":
            break;
        case "Mis tutorias":
            $('#dataTables-example').DataTable({
                responsive: true
            });
            $('#dataTables-example_2').DataTable({
                responsive: true
            });
            break;
    }
}


