<?php 
function modelo_inmueble2($r, $cantidad_inmuebles){

    for ($i = 0; $i < $cantidad_inmuebles; $i++) {
        $r[$i]['foto1'] = existeImagen(($r[$i]['foto1']));
        $codigo = str_ireplace("951-", "", $r[$i]['Codigo_Inmueble']);
        $api = $r[$i];
        echo '
        <div class="col-12 col-md-6 col-lg-4 wow fadeIn">
        <div class="property">
            <a href="detalle-Inmueble.php?co='.$api['Codigo_Inmueble'].'">
                <div class="property-image"><img alt="" src="'.$api['foto1'].'"></div>
                <div class="overlay">
                    <div class="info">';
                    if($api['Gestion'] == "Arriendo/venta"){
                        echo '
                            <div class="tag price">$ '.$api['Canon']. '/ $' .$api['Venta'].'</div>
                        ';
                    }else if($api['Gestion'] == 'Arriendo'){
                        echo '
                            <div class="tag price">$ '.$api['Canon'].'</div>
                        ';
                    }else{
                        echo '
                            <div class="tag price">$ '.$api['Venta'].'</div>
                        ';
                    }
                    echo '
                        <h3>'.$api['Gestion'].' - '.$api['Tipo_Inmueble'].'</h3>
                        <h3> Código: '.$codigo.'</h3>
                        <figure>'.$api['Barrio'].', '.$api['Ciudad'].'</figure>
                    </div>
                    <ul class="additional-info">
                        <li>
                            <header>Areá:</header>
                            <figure>'.$api['AreaConstruida'].'m<sup>2</sup></figure>
                        </li>
                        <li>
                            <header>Cuartos:</header>
                            <figure>'.$api['Alcobas'].'</figure>
                        </li>
                        <li>
                            <header>Baños:</header>
                            <figure>'.$api['banios'].'</figure>
                        </li>
                        <li>
                            <header>Garaje:</header>
                            <figure>'.$api['garaje'].'</figure>
                        </li>
                    </ul>
                </div>
            </a>
        </div>
    </div>
           ';
    }
}

