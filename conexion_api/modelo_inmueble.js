// Debe ir antes de listarInmueble.js || inmuebles_destacados.js || detalle_inmueble.js

var contenedor_inmueble = " ", propiedad_similar =" " , pag =" ";

var modelo_inmueble = function(inmuebles){
    for(var pos=0; pos <inmuebles.length; pos++){
        //Validar si trae imagenes
        validarImagenInmueble(inmuebles[pos]);
        validarUbicacionPrecio(inmuebles[pos]);
         contenedor_inmueble += 
                '<div class="col-12 col-md-6 col-lg-3">'+
                '<div class="property">'+
                '<a href="detalle-inmueble.php?co='+inmuebles[pos].Codigo_Inmueble+'">'+
                '<div class="property-image">'+
                '<img alt="" src="'+inmuebles[pos].foto1+'">'+
                '</div>'+
                '<div class="overlay">'+
                '<div class="info">'+
                '<div class="tag price">$ '+inmuebles[pos].Canon+'</div>';
                if(inmuebles[pos].Gestion == "Arriendo/venta"){
                        contenedor_inmueble += '<div class="tag price ml-3">$ '+inmuebles[pos].Venta+'</div>';     
                }
                contenedor_inmueble += 
                '<h3>'+inmuebles[pos].Gestion+' - '+inmuebles[pos].Tipo_Inmueble+'</h3>'+
                '<h3> Código: '+inmuebles[pos].Codigo_Inmueble+'</h3>'+
                '<figure>'+inmuebles[pos].Barrio+', '+inmuebles[pos].Ciudad+'</figure>'+
                '</div>'+
                '<ul class="additional-info">'+
                '<li>'+
                '<header>Areá:</header>'+
                '<figure>'+inmuebles[pos].AreaConstruida+'m<sup>2</sup></figure>'+
                '</li>'+
                '<li>'+
                '<header>Cuartos:</header>'+
                '<figure>'+inmuebles[pos].Alcobas+'</figure>'+
                '</li>'+
                '<li>'+
                '<header>Baños:</header>'+
                '<figure>'+inmuebles[pos].banios+'</figure>'+
                '</li>'+
                '<li>'+
                '<header>Garaje:</header>'+
                '<figure>'+inmuebles[pos].garaje+'</figure>'+
                '</li>'+
                '</ul>'+
                '</div>'+
                '</a>'+
                '</div>'+
                '</div>';
                // Codigo html de la propiedad
    }
            return contenedor_inmueble;
}
var modelo_inmueble_destacados = function(inmuebles){
        for(var pos=0; pos <2; pos++){
            //Validar si trae imagenes
            validarImagenInmueble(inmuebles[pos]);
            validarUbicacionPrecio(inmuebles[pos]);
             contenedor_inmueble += 
             '<div class="col-12 col-md-6 col-lg-3">'+
             '<div class="property">'+
             '<a href="">'+
             '<div class="property-image">'+
             '<img alt="" src="'+inmuebles[pos].foto1+'">'+
             '</div>'+
             '<div class="overlay">'+
             '<div class="info">'+
             '<div class="tag price">$ '+inmuebles[pos].Canon+'</div>'+
             '<h3>'+inmuebles[pos].Gestion+'</h3>'+
             '<figure>'+inmuebles[pos].Barrio+', '+inmuebles[pos].Ciudad+'</figure>'+
             '</div>'+
             '<ul class="additional-info">'+
             '<li>'+
             '<header>Areá:</header>'+
             '<figure>'+inmuebles[pos].AreaConstruida+'m<sup>2</sup></figure>'+
             '</li>'+
             '<li>'+
             '<header>Cuartos:</header>'+
             '<figure>'+inmuebles[pos].Alcobas+'</figure>'+
             '</li>'+
             '<li>'+
             '<header>Baños:</header>'+
             '<figure>'+inmuebles[pos].banios+'</figure>'+
             '</li>'+
             '<li>'+
             '<header>Garaje:</header>'+
             '<figure>'+inmuebles[pos].garaje+'</figure>'+
             '</li>'+
             '</ul>'+
             '</div>'+
             '</a>'+
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
//                         // Codigo html de la propiedad
//         }
//         return propiedad_similar;
// }
                
