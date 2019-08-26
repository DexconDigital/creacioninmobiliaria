// El paginador recibe parametros por, convertir esos parametros de php a la variable pagina.
if(pagina == 1){
    $('#atras').addClass('disabled');
}else if(pagina == numeroPaginas){
    $('#siguiente').addClass('disabled');
}

var numeroPaginas = cantidadPaginas(totalpagina, totalInmuebles);
var contenido_paginas= 'Pagina '+pagina+' de '+numeroPaginas+'';
$('#pagina_numero').append(contenido_paginas);

function paginador(actual) {
    var reemplazar = 'pag='+pagina;
    url = url.replace(reemplazar, "");
    if (actual == 'ant') {
        pagina--;
        location.href = url;
    }
    if (actual == 'sig') {
        pagina++;
        location.href = url+'pag='+pagina;
    }
}