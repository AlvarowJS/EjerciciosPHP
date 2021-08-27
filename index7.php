<?php
$nota1 = 14;
$nota2 = 12;
$nota3 = 17;
$nota4 = 20;

if($nota1 < $nota2 && $nota1 < $nota3 && $nota1 < $nota4){

    $promedio = ($nota2 + $nota3 + $nota4)/3;
    echo "El promedio es ". $promedio . " se elimino la nota " . $nota1;

}elseif($nota2 < $nota1 && $nota2 < $nota3 && $nota2 < $nota4){

    $promedio = ($nota1 + $nota3 + $nota4)/3;
    echo "El promedio es ". $promedio . " se elimino la nota " . $nota2;

}elseif($nota3 < $nota1 && $nota3 < $nota2 && $nota3 < $nota4){
    
    $promedio = ($nota1 + $nota2 + $nota4)/3;
    echo "El promedio es ". $promedio . " se elimino la nota " . $nota3;

}elseif($nota4 < $nota1 && $nota4 < $nota3 && $nota4 < $nota3){
    
    $promedio = ($nota1 + $nota2 + $nota3)/3;
    echo "El promedio es ". $promedio . " se elimino la nota " . $nota4;

}

?>