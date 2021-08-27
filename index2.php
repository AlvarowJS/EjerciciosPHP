<?php
    $numero = 3;
    if($numero % 2 == 0 && $numero>0){
        echo "EL numero es par positivo";
    }
    else if($numero % 2 == 0){
        echo "El numero es par pero negativo";
    }
    else{
        echo "El numero es impar";
    }
?>