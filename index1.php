<?php
    $precio = 1500;
    $hora = 2;
    $minuto = 30;
    $porHoras = $hora * $precio;
    //Se hace la conversion de minuto a hora 
    $porMinuto = $precio * ($minuto *(1/60));
    $resultado = $porHoras + $porMinuto;
    
    echo "Hora: " . $hora ."<br> Minutos: " . $minuto
    ."<br>El resultado es ". $resultado. "$";
?>