<?php
//Formatear numeros, cantidades de dinero

$cantidad_1 = 1273.77;
$cantidad_2 = 1931.81;

//number:format (cantidad,decimales,sep_decimal,sep_millar)
$cantidad_1 = number_format($cantidad_1);
echo $cantidad_1;
echo "<br>";
$cantidad_2 = number_format($cantidad_2,2,".","");
echo $cantidad_2;