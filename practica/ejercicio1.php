<?php
$dividiendo = 9;
$divisor = 9;
$residuo = $dividiendo % $divisor;
$division = (int)($dividiendo / $divisor);
if($residuo==0){
    echo "La division es exacta. Cociente: ". $division;
}
else{
    echo "No es exacta. Cociente: ". $division. " Resto: ". $residuo;
}
?>