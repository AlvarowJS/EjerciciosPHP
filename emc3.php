<?php
$camisas = 200;
$pantalones = 100;

$lote1 = $camisas - 1;
$lote1v = $pantalones -1;
$lote2 = $pantalones - 1;
$lote2v = $camisas - 3;

for ($i=$camisas; $i >20 ; $i--) {
    for ($j=$pantalones; $j < 20; $j--) { 
        $total1 = $i * 30;
        $total2 = $j * 30;
        echo $total1. "-". $total2 ."<br>";
    } 
    
}

?>