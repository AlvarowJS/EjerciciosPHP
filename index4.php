<?php

$valorleido = 121;
$numinv = 0;
$cociente = $valorleido;
while ( $cociente != 0)
{
	$resto = $cociente % 10;
    //echo "resto ".$resto."<br>";
	$numinv = $numinv * 10 + $resto;
    //echo "numinv ".$numinv."<br>";
	$cociente = (int)($cociente / 10);
    //echo "cociente ".$cociente."<br>";
}
if ( $valorleido == $numinv )
    echo "El numero ". $valorleido . " Es igual al revez";
	
else
	echo "El numero ". $valorleido. " NO es igual al revez";
?>