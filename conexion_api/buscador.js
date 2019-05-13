$(document).ready(function () {
    // Validar codigo
    $('#codigo_buscar').keyup(function () {
        var value = $(this).val();
        if(value.length>0){
            $('#ciudad_buscar').attr("disabled", true);
            $('#barrio_buscar').attr("disabled", true);
            $('#tipo_inmueble_buscar').attr("disabled", true);
            $('#tipo_operacion_buscar').attr("disabled", true);
            $('#precio_minimo_buscar').attr("disabled", true);
            $('#precio_maximo_buscar').attr("disabled", true);
        }else{
            $('#ciudad_buscar').removeAttr("disabled");
            $('#barrio_buscar').removeAttr("disabled");
            $('#tipo_inmueble_buscar').removeAttr("disabled");
            $('#tipo_operacion_buscar').removeAttr("disabled");
            $('#precio_minimo_buscar').removeAttr("disabled");
            $('#precio_maximo_buscar').removeAttr("disabled");
        }
    });

    // Cargar departamento
    $.ajax({
        url: 'http://www.simi-api.com/ApiSimiweb/response/v2/departamento',
        type: 'GET',
        beforeSend: function (xhr) {
            xhr.setRequestHeader(
                'Authorization',
                'Basic ' + btoa('Authorization:' + TOKEN));
        },
        'dataType': "json",
        success: function (data) {
            for (var i = 0; i < data.length; i++) {
                $.ajax({
                    url: 'http://www.simi-api.com/ApiSimiweb/response/v2/ciudad/idDepartamento/' + data[i].id,
                    type: 'GET',
                    beforeSend: function (xhr) {
                        xhr.setRequestHeader(
                            'Authorization',
                            'Basic ' + btoa('Authorization:' + TOKEN));
                    },
                    'dataType': "json",
                    success: function (ciudad) {
                        var ciudades_resultados = " ";
                        for (var i = 0; i < ciudad.length; i++) {
                            ciudades_resultados +=
                                '<option value="' + ciudad[i].id + '">' +
                                ciudad[i].nombre +
                                '</option>';
                        }
                        $('#ciudad_buscar').append(ciudades_resultados);
                        // Traer Barrios
                        $("#ciudad_buscar").change(function () {
                            var ciudad_id = $("#ciudad_buscar option:selected").val();
                            $('#barrio_buscar').empty();
                                $.ajax({
                                    url: 'http://www.simi-api.com/ApiSimiweb/response/v2/barrios/idCiudad/' + ciudad_id,
                                    type: 'GET',
                                    beforeSend: function (xhr) {
                                        xhr.setRequestHeader(
                                            'Authorization',
                                            'Basic ' + btoa('Authorization:' + TOKEN));
                                    },
                                    'dataType': "json",
                                    success: function (barrios) {
                                        var barrios_resultados = " ";
                                        for (var i = 0; i < barrios.length; i++) {
                                            barrios_resultados +=
                                                '<option value="' + barrios[i].id + '">' +
                                                barrios[i].nombre +
                                                '</option>';
                                        }
                                        $('#barrio_buscar').append(barrios_resultados);
                                    }
                                });
                        });

                    }
                });
            }
        }
    });

    $.ajax({
        url: 'http://www.simi-api.com/ApiSimiweb/response/gestion',
           type: 'GET',
           beforeSend: function (xhr) {
           xhr.setRequestHeader(
              'Authorization',
              'Basic ' + btoa('Authorization:'+TOKEN));
           },
           'dataType': "json",
           success:function(gestion)
           {
               console.log(gestion);
            var gestion_resultados = " ";
            for (var i = 0; i < gestion.length; i++) {
                gestion_resultados +=
                    '<option value="' + gestion[i].id + '">' +
                    gestion[i].Nombre +
                    '</option>';
            }
            $('#tipo_inmueble_buscar').append(gestion_resultados);
           }
                       
       });

    $.ajax({
        url: 'http://www.simi-api.com/ApiSimiweb/response/v2/tipoInmuebles/unique/1',
           type: 'GET',
           beforeSend: function (xhr) {
           xhr.setRequestHeader(
              'Authorization',
              'Basic ' + btoa('Authorization:'+TOKEN));
           },
           'dataType': "json",
           success:function(operacion)
           {
              console.log(operacion);
              var operacion_resultados = " ";
              for (var i = 0; i < operacion.length; i++) {
                  operacion_resultados +=
                      '<option value="' + operacion[i].id + '">' +
                      operacion[i].Nombre +
                      '</option>';
              }
              $('#tipo_operacion_buscar').append(operacion_resultados);
             }
                       
       });

    // Buscar por medio del boton
    $('#buscar').click(function () {
        busqueda();
    });
    // buscar por medio de la tecla enter
    $('body').keyup(function(e) {
        if(e.keyCode == 13) {
            busqueda();
        }
    });
});

var code, ciudad_buscar, barrio_buscar, gestion_buscar, operacion_buscar, maximo_buscar, minimo_buscar;
var busqueda = function(){
    code = $("#codigo_buscar").val();
    ciudad_buscar = $('#ciudad_buscar option:selected').val();
    barrio_buscar = $('#barrio_buscar option:selected').val();
    operacion_buscar = $('#tipo_operacion_buscar option:selected').val();
    gestion_buscar = $('#tipo_gestion_buscar').val();
    maximo_buscar = $('#maximo_buscar').val();
    minimo_buscar = $('minimo_buscar').val();


    existeCampo(ciudad_buscar);
    console.log(ciudad_buscar);
    if (code !== "") {
        window.location.href = 'detalle-inmueble.php?dt=933-' + code + '';
    }else{

    }
}

var existeCampo = function(campo){
    if(campo == null){
        campo = 0;
    }
}