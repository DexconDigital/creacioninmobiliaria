// Debe ir antes de listarInmueble.js || inmuebles_destacados.js || detalle_inmueble.js

var contenedor_inmueble = " ", propiedad_similar =" " , pag =" ";
var modelo_inmueble = function(inmuebles){
    for(var pos=0; pos <inmuebles.length; pos++){
        //Validar si trae imagenes
        validarImagenInmueble(inmuebles[pos]);
         contenedor_inmueble += 
                '<div class="property-block col-12 col-sm-6 col-lg-4">'+
                '<div class="inner-box">'+
                '<div class="image">'+
                '<a href="detalle-inmueble.php?dt='+inmuebles[pos].Codigo_Inmueble+'"><img src="'+inmuebles[pos].foto1+'" alt=""></a>'+
                '<div class="sale">'+inmuebles[pos].Gestion+'</div>'+
                '<div class="price">$ '+inmuebles[pos].Canon+'</div>'+
                '</div>'+
                '<div class="lower-content">'+
                '<div class="upper-box" style="min-height: 9.3rem;">'+
                '<h3><a href="">'+inmuebles[pos].Tipo_Inmueble+'</a></h3>'+
                '<div class="location">'+inmuebles[pos].Barrio+' '+inmuebles[pos].Zona+' '+inmuebles[pos].Ciudad+'</div>'+
                
                '</div>'+
                '<div class="lower-box clearfix">'+
                '<div class="pull-left">'+
                '<ul>'+
                '<li><span class="icon flaticon-bed-1"></span>'+inmuebles[pos].Alcobas+'</li>'+
                '<li><span class="icon flaticon-bathtube-with-shower"></span>+'+inmuebles[pos].banios+'</li>'+
                '<li><span class="icon flaticon-garage"></span>'+inmuebles[pos].garaje+'</li>'+
                '</ul>'+
                '</div>'+
                '<div class="pull-right">'+
                '<ul>'+
                '<li><span class="icon flaticon-squares"></span>Codigo: '+inmuebles[pos].Codigo_Inmueble+'</li>'+
                '</ul>'+
                '</div>'+
                '</div>'+
                '</div>'+
                '</div>'+
                '</div>';
    }
            return contenedor_inmueble;
}

// var propiedades_similares= function(inmuebles){
//         for(var pos=0; pos < inmuebles.length; pos++){
//                 //Validar si trae imagenes
//                 validarImagenInmueble(inmuebles[pos]);
//                 propiedad_similar+=
                
//         }
//         return propiedad_similar;
// }
                
