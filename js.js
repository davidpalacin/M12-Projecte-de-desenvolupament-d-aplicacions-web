$(document).ready(function Todo(){
    $("#cajaCrear").hide();
    $("#cajaVer").hide();

    $("#crearNota").click(function(){
        $("#cajaCrear").show();
        $("#cajaVer").hide();
    });

    $("#verNota").click(function(){
        $("#cajaCrear").hide();
        $("#cajaVer").show();
        var propietario = $("#propietario").val();
        console.log(propietario);

        $.ajax({
            type: "POST", //Mediante el método post
            url: "php/mostrar_notas.php", //utilizando este archivo php
            data: {
                propietario: propietario,
            }
        }); //fin ajax

    });

    $("#listo").click(function cargaPHP(){
        var contenido = $("#textArea").val();
        console.log(contenido);

        $.ajax({
            type: "POST", //Mediante el método post
            url: "php/nueva_nota.php", //utilizando este archivo php
            data: {
                contenido: contenido,
            }
        }); //fin ajax
    });

});