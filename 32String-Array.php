<?php
//convertir string a array
$fecha="2021/01/29";
$fecha_2="2025-08-31";
$numeros = "uno dos tres cuatro cinco seis siete ";

//funcion explode recibe tres parametros delimitador 
// string, lmiitador (es opcional).

$array_fecha = explode("-",$fecha_2);
echo $array_fecha[2];

echo "<br>";
echo "<br>";

$array_numeros = explode(" ",$numeros,-1);
echo $array_numeros[5];

