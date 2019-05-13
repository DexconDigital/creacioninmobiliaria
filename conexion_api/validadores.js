const IMG_DEFAULT = 'images/no_image.png';

var validarImagenInmueble = function(inmueble){
    if(inmueble.foto1 == ""){
        inmueble.foto1 = IMG_DEFAULT;
    }
    return inmueble.foto1;
} 

var validarImagenDetalleInmueble = function(inmueble){
    if(inmueble.foto == "" || inmueble.foto == undefined){
        inmueble.foto = IMG_DEFAULT;
    }
    return inmueble.foto;
}
var existeElemento= function(propiedad, elemento){
    if(propiedad == "" || propiedad == 0 || propiedad == undefined){
        $(elemento).css("display", "none");
    }
}

var validarpagina = function(pagina, totalPagina){
    if(pagina == undefined){
        $('.previus').css('display','none');
        $('.next').css('display', 'none');
    }else if(pagina == 1){
        $('.previus').css('display','none');
    }else if(pagina == totalPagina){
        $('.next').css('display', 'none');
    }
}

var cantidadPaginas = function(totalPagina, totalInmuebles){
    totalPagina = Math.ceil(totalInmuebles/totalPagina);
    return totalPagina;
}