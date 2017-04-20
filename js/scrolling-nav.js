//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

function formCliente() {
    $('#cambiarInfo').click(
            function () {
                $('#nombre').removeAttr("disabled").focus();
                $('#apellido').removeAttr("disabled").focus();
                $('#tipoDocumento').removeAttr("disabled").focus();
                $('#documento').removeAttr("disabled").focus();
                $('#tipoUsuario').removeAttr("disabled").focus();
                $('#edad').removeAttr("disabled").focus();
                 $('#hacerCambios').removeAttr("disabled").focus();
            }
    );
}