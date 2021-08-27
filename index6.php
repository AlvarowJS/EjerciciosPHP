<?php

$juan = 18;
$mario = 12;
$pedro = 12;
if($mario == $pedro && $mario == $juan && $juan == $pedro){
    echo "Mario, Pedro y Juan tiene la misma edad de ". $juan;
}
elseif($juan == $mario){
    echo "Juan y Mario tienen la misma edad de ". $juan;
}
elseif($juan == $pedro){
    echo "Juan y Pedro tiene la misma edad de " . $juan;
}
elseif($mario == $pedro){
    echo "Mario y pedro tiene la misma edad de ". $mario;
}