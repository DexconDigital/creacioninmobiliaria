// El paginador recibe parametros por, convertir esos parametros de php a la variable pagina.
function paginador(actual) {

    if (actual == 'ant') {
        pagina--;
        location.href = 'inmuebles.php?pag='+pagina+'#inm';
    }
    if (actual == 'sig') {
        pagina++;
        location.href = 'inmuebles.php?pag='+pagina+'#inm';
    }
    return pagina;
}

if(pagina == 0 || pagina == null || pagina == undefined || pagina ==""){
    pagina = 1;
}

$.ajax({
    url: 'http://www.simi-api.com/ApiSimiweb/response/v2.1.3/filtroInmueble/limite/'+pagina+'/total/9/departamento/0/ciudad/0/zona/0/barrio/0/tipoInm/0/tipOper/0/areamin/0/areamax/0/valmin/0/valmax/0/campo/0/order/0/banios/0/alcobas/0/garajes/0/sede/0/usuario/0',
    type: 'GET',
    beforeSend: function (xhr) {
    xhr.setRequestHeader(
        'Authorization',
        'Basic ' + btoa('Authorization:'+TOKEN));
    },
    'dataType': "json",
    success:function(data)
    {   
        var inmuebles = data.Inmuebles;
        var paginas = data.datosGrales;
        console.log(paginas);
        modelo_inmueble(inmuebles);
        validarpagina(pagina, cantidadPaginas(paginas.totalPagina, paginas.totalInmuebles));
        // paginador
        var contador = 0;
        
        while(contador < cantidadPaginas(paginas.totalPagina, paginas.totalInmuebles)){
                contador++;
                pag += '<li class="page-item">'+
                '<a class="page-link" href="inmuebles.php?pag='+contador+'#inm">'+contador+'</a>'+
                '</li>';
        }
        $('.lista-paginas').append(pag);
        // fin paginador
        $("#inm").append(contenedor_inmueble);
    }     
   });
