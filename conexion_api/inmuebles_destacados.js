// Requiere archivo token.js
// Requiere archivo validadores.js
// Requiere archivo modelo_inmueble.js

// valor random
var ramdon = Math.floor((Math.random() * 10) + 1);

$.ajax({
    url: 'http://www.simi-api.com/ApiSimiweb/response/v21/inmueblesDestacados/total/3/limit/'+ramdon,
       type: 'GET',
       beforeSend: function (xhr) {
       xhr.setRequestHeader(
          'Authorization',
          'Basic ' + btoa('Authorization:'+TOKEN));
       },
       'dataType': "json",
       success:function(response)
       {
          console.log(response);
       }              
   });