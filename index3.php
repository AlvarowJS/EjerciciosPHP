<?php
    $docena = 5;
    $precioProducto = 40;
    $resultado = $docena * $precioProducto;
    if($docena > 3){
        $regalo = (int)($docena / 3);
        $resultadoDesc = $resultado - $resultado * 0.15;
        echo "El monto total es ". $resultado . 
        " $, Aplicando el descuento de 15% seria " . $resultadoDesc . 
        " $ y obtiene ". $regalo ." unidad o unidades de regalo";
    }
    else {
        $resultadoDesc = $resultado - $resultado *0.1;
        echo "El monto total es ". $resultado . 
        " $, Aplicando el descuento de 10% seria " . $resultadoDesc . " $";
    }
?>