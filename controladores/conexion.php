<?php

function Conect()
{
    $echo = mysqli_connect("localhost","root","","noticias_inmueble");
    return $echo;
}

?>
