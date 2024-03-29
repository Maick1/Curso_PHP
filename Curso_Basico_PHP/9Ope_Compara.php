<?php

#igualdad
var_dump(1=="1");
echo "<br>";
var_dump(2=="1");

#identico tiene en cuenta el tipo de dato
echo "<br>";
$valor = 1;
var_dump($valor==="1");

#diferente, no tiene en cuenta el tipo d dato
echo "<br>";
$valor = 9;
var_dump($valor!="7");

#Diferente (<>), se puede comparar string
echo "<br>";
$valor = "Hola";
var_dump($valor<>"Hola");

#No Identico(!==), si tiene en cuenta el tipo de dato
echo "<br>";
$valor = 3;
var_dump($valor!==2);

#Menor q < mayor q >
echo "<br>";
$valor = 3;
var_dump($valor<2);

echo "<br>";
$valor = 3;
var_dump($valor>2);