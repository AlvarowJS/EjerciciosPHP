<?php
$actualYear = 2021;
$year= 2050;
if($actualYear>$year){
    $calculo = $actualYear - $year;
    echo "Desde el año ".$year. " han pasado ". $calculo;
}elseif($actualYear<$year){
    $calculo = $year - $actualYear;
    echo "Para llegar al año ".$year. " faltan ". $calculo;
}
?>