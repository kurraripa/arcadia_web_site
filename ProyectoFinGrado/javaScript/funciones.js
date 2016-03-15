//var mostrar = true;
//
//function mostrarClientes()
//{
//    if (mostrar)
//    {
//        $("header").css("height", "25em");
//        $('#cajaClientes').slideDown(500);
//        $("#barraSuperior ol li:first-child").css("border-bottom", "none");
//        $("#barraIzq").css("background-color", "#e5e5e5");
//        $("#barraSuperior ol li:nth-of-type(2)").css("background-color", "#e5e5e5");
//        $("#barraSuperior ol li:nth-of-type(3)").css("background-color", "#e5e5e5");
//        mostrar = false;
//    }
//    else
//    {
//        $('.expandArea').slideUp(500);
//        $("header").css("height", "10em");
//        $("#barraSuperior ol li").css("border-bottom", "1px solid white");
//        $("#barraIzq").css("background-color", "lightgrey");
//        $("#barraSuperior ol li:nth-of-type(2)").css("background-color", "lightgrey");
//        $("#barraSuperior ol li:nth-of-type(3)").css("background-color", "lightgrey");
//        mostrar = true;
//    }
//}
//
//function mostrarAyuda()
//{
//    if (mostrar)
//    {
//        $("header").css("height", "25em");
//        $('#cajaAyuda').slideDown(500);
//        $("#barraSuperior ol li:nth-of-type(2)").css("border-bottom", "none");
//        $("#barraIzq").css("background-color", "#e5e5e5");
//        $("#barraSuperior ol li:nth-of-type(1)").css("background-color", "#e5e5e5");
//        $("#barraSuperior ol li:nth-of-type(3)").css("background-color", "#e5e5e5");
//        mostrar = false;
//    }
//    else
//    {
//        $('.expandArea').slideUp(500);
//        $("header").css("height", "10em");
//        $("#barraSuperior ol li").css("border-bottom", "1px solid white");
//        $("#barraIzq").css("background-color", "lightgrey");
//        $("#barraSuperior ol li:nth-of-type(1)").css("background-color", "lightgrey");
//        $("#barraSuperior ol li:nth-of-type(3)").css("background-color", "lightgrey");
//        mostrar = true;
//    }
//}
//
//function mostrarContacto()
//{
//    if (mostrar)
//    {
//        $("header").css("height", "25em");
//        $('#cajaContacto').slideDown(500);
//        $("#barraSuperior ol li:nth-of-type(3)").css("border-bottom", "none");
//        $("#barraIzq").css("background-color", "#e5e5e5");
//        $("#barraSuperior ol li:nth-of-type(1)").css("background-color", "#e5e5e5");
//        $("#barraSuperior ol li:nth-of-type(2)").css("background-color", "#e5e5e5");
//        mostrar = false;
//    }
//    else
//    {
//        $('.expandArea').slideUp(500);
//        $("header").css("height", "10em");
//        $("#barraSuperior ol li").css("border-bottom", "1px solid white");
//        $("#barraIzq").css("background-color", "lightgrey");
//        $("#barraSuperior ol li:nth-of-type(1)").css("background-color", "lightgrey");
//        $("#barraSuperior ol li:nth-of-type(2)").css("background-color", "lightgrey");
//        mostrar = true;
//    }
//}

$(document).ready(function(){
    $("#txtBuscar").click(function(){
        $("#txtBuscar").val("");
    });
     $("#txtBuscar").blur(function(){
        $("#txtBuscar").val("Ej.: neurología, gripe, horario...");
    });
    
    $("#btnBuscarEnf").click(function()
    {        
        if($("#txtBuscarEnf").val() == "")
        {
            $("#txtBuscarEnf").val("Inserte texto");
        }
    });
});