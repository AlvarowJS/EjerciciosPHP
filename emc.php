<?php
$anio = 1988;

if ((($anio % 4 == 0) && ($anio % 100 != 0 )) || ($anio % 400 == 0)){
   echo "es bisiesto";
  }
  else{
      echo "no es bisiesto";
  }
?>