<?php

$forma="papel"; 
$forma2="piedra"; 
echo "el jugador uno uso <br>". $forma . "<br>";
echo "el jugador dos uso <br>". $forma2 . "<br>";
    if ($forma==$forma2){
        echo "empate";
    }else{
        if($forma=="tijera"){
     
            if ($forma2=="papel"){
                echo "gano jugador 1";
            }else{
                echo "gano jugador 2";
            }
        }else{
            if ($forma=="papel"){
            
                if ($forma2=="piedra"){
                    echo "gano el jugador 1";
                }else{
                    echo "gano el jugador 2";
                }
            }else{
                if ($forma=="piedra"){
                    
                    if ($forma2=="tijera"){
                        echo "gano el jugador 1";
                    }else{
                        echo "gano el jugador 2";
                    }
                }
            }
        }

    }



?>