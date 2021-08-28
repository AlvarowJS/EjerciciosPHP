<?php
$dividiendo = 9;
$divisor = 6;

if($divisor==0){
    echo "No se puede dividir por 0";
}else{
    $residuo = $dividiendo % $divisor;
    $division = (int)($dividiendo / $divisor);
    if($residuo==0){
        echo "La division es exacta. Cociente: ". $division;
    }
    else{
        echo "No es exacta. Cociente: ". $division. " Resto: ". $residuo;
    }
}
?>