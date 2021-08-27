<?php
$numero = 433;

if($numero < 1000 && $numero >99)
{
    $calculo = 999 - $numero;
    $resultado = $numero + $calculo;
    echo "el numero maximo de 3 cifras es igual a ". $resultado ." sumando "
    . $numero . " + " .$calculo;
}else{
    echo "El numero no tiene 3 cifras";
}
?>