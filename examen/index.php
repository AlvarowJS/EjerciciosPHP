<?php

$persona1 = "piedra";
$persona2 = "papel";
echo "La persona 1 uso" + $persona1;
echo "La persona 2 uso" + $persona2;

if($persona1 == "piedra" && $persona2 == "tijera"){
    echo "El ganador es " + $persona1;
}
elseif($persona1 == "piedra" && $persona2 == "papel"){
    echo "El ganador es" + $persona2;
}elseif($persona1 == "tijera" && $persona2 == "piedra"){
    echo "El ganador es" + $persona2;
}elseif($persona1 == "tijera" && $persona2 == "papel"){
    echo "El ganador es" + $persona1;
}elseif($persona1 == "papel" && $persona2 == "piedra"){
    echo "El ganador es" + $persona1;
}elseif($persona1 == "papel" && $persona2 == "tijera"){
    echo "El ganador es" + $persona2;
}

?>