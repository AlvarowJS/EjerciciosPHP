<?php
$recorrido = 1000;
$montoFijo = 300000;
$adicional1 = 15000;
$adicional2 = 10000;
if($recorrido <= 300){
    $total = $montoFijo;
    $totalIGV = $total + ($total * 0.2);
    echo "El monto a pagar es ". $total. " Mas IGV seria ". $totalIGV;
}
elseif($recorrido > 300 && $recorrido < 1000){
    
    $total = $montoFijo + $adicional1 * ($recorrido-300);
    $totalIGV = $total + ($total * 0.2);
    echo "El monto a pagar es ". $total. " Mas IGV seria ". $totalIGV;
}
elseif($recorrido >= 1000){
 
    $total = $montoFijo + $adicional1 * ($recorrido-300) + $adicional2 * ($recorrido-1000);
    $totalIGV = $total + ($total * 0.2);
    echo "El monto a pagar es ". $total. " Mas IGV seria ". $totalIGV;
}

?>