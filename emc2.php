<?php
$dias = 1;
$horas = 1;
$minutos = 1;

$segundoM = $minutos * 60;
$horaM = $horas * 60 * 60;
$diaM = $dias * 24 * 60 * 60;

$total = $segundoM + $horaM + $diaM;
echo $total; 
?>