function formCliente() {
    //Mandar $_session() OJO
    $("#perfil").hide();
//    Ejemplo de post OJO
//Cargar Pagina
//    $().click(
//            function () {
//                $.post("ejemplo_POST.php", function () {
//
//                });
//            }
//    );
//Enviar datos

    var valor = $("#sesion").attr("content");
    alert(valor);
    if (valor != "") {
        $("#perfil").show();
        $("#ingreso").hide();
        $("#registro").hide();
    } else {
        $("#perfil").hide();
        $("#ingreso").show();
        $("#registro").show();
    }
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
            $("#boton1").click(function () {
                $("#mensaje").text("Espera mientras carga...");
                geolocalizarUsuario();
            });
            break;
        case "Ingreso tutorias":
            break;
        case "Registro tutorias":
            $("#registrarCliente").hide();
            $(":password").keyup(function () {
                var clave = $("#clave").val();
                var rep_clave = $("#rep_clave").val();
                if (clave == rep_clave && clave != "") {
                    $("#registrarCliente").show();
                } else {
                    $("#registrarCliente").hide();
                }
            });
            $("#mostrarPass").click(function () {
                if ($("#mostrarPass").is(":checked")) {
                    $("#clave").attr("type", "text");
                    $("#rep_clave").attr("type", "text");
                } else {
                    $("#clave").attr("type", "password");
                    $("#rep_clave").attr("type", "password");
                }
            });
            $("#boton1").click(function () {
                $("#mensaje").text("Espera mientras carga...");
                geolocalizarUsuario();
                alert($("#lat").val() + " " + $("#lon").val());
            });

            break;
        case "Busqueda de tutorias":
            $("#boton1").click(function () {
                $("#mensaje").text("Espera mientras carga...");
                geolocalizarUsuario();
            });
            break;
        case "Mis tutorias":
            $('#dataTables-example').DataTable({
                responsive: true
            });
            $('#dataTables-example_2').DataTable({
                responsive: true
            });
            break;
        case "AJAX":
            $("#AjaxButton").click(
                    function () {
                        $.post("ejemplo_POST.php", {documento: $("#documento_2").val()}, function (htmlexterno) {
                            $("#cargaexterna").html(htmlexterno);
                        });
                    }
            );
            break;
//        case "Error no especificado": 
//            $ingreso=$("#ingreso").val();
//            $registro=$("#registro").val();
//            $("#registro").empty();
////            $("#registro").append($ingreso);
////            $("#ingreso")
////            $("#registro").html("Cosas");
//             break;
    }
}


