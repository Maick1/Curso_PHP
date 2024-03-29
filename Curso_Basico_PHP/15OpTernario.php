<?php

/*Operador termario se considera como instruccion if
de una sola lina se compone de:
El Operator y dos resultados
Sintaxis:
<operator> ? <true value>: < false value>*/
(9>7)? $total=10*7 : $total=10*5;

echo $total;

echo ("<br>");
echo ("<br>");

//Ejemplo

$camisas = 10;
$precio = 70;

$total = $camisas * $precio;

//operador ternario

$total = ($camisas>=3) ? $total-($total*0.20) : $total-($total*0.10);

echo("Total: " .$total);
