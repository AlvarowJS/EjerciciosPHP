<?php
    $lado1 = 40;
    $lado2 = 4;
    $lado3 = 10;
    $Rlado1 = $lado2 + $lado3;
    $Rlado2 = $lado1 + $lado3;
    $Rlado3 = $lado1 + $lado2;
    if($lado1 < $lado3 && $lado2 < $Rlado2 && $lado3 < $Rlado3){
       
        if($lado1 == $lado2 &&  $lado2 == $lado3 && $lado1==$lado3){
          
            echo "es equilatero";

       } elseif($lado1 == $lado2 ||  $lado2 == $lado3 || $lado1==$lado3){
            
            echo "es isoscelees";

       } else{

            echo "escaleno";
        }
    }else{
        echo "Este no es un triangulo";
    }

?>