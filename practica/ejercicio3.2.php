<?php
$actualYear = 2050;
$year= 2051;
$calculo = $actualYear - $year;

if($calculo == 1){
    echo "Para llegar al año ". $year." falta 1 año";
}

else{
if($actualYear>$year){
    $calculo = $actualYear - $year;
    echo "Desde el año ".$year. " han pasado ". $calculo;
}elseif($actualYear<$year){
    $calculo = $year - $actualYear;
    echo "Para llegar al año ".$year. " faltan ". $calculo;
}elseif($actualYear==$year){
    echo "Son el mismo año!";
}
}
?>