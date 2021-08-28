<?php
$numero1=34;
$numero2=35;
$calculo1 = $numero1 % $numero2;
$calculo2 = $numero2 % $numero1;
 if($numero1 >= $numero2 && $calculo1 !=0){
     echo $numero1 . " no es multiplo de " . $numero2;
 }elseif($numero1 >= $numero2 && $calculo1 ==0){
    echo $numero1 . " es multiplo de " . $numero2;
 }elseif($numero2 < $numero1 && $calculo2 !=0){
    echo $numero1 . " no es multiplo de " . $numero2;
 }else{
    echo $numero1 . " es multiplo de " . $numero2;
 }
?>