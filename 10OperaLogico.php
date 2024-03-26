<?php
/*
And (y) = and , &&
Or (o) = or ,  ||
Not (no) = !

*/

$valor_1=7;
$valor_2=2;

echo "Operador and: ";
#and sirve para afirmaciones de verdad
var_dump($valor_1==7 && 9>3);

echo "<br>";
echo "Operador Or: ";
#or una expresiones debe ser verdadera
var_dump($valor_1==7 or 9>3 or $valor_2>10);

#not 
echo "<br>";
echo "Operador not: ";
$resultado=!($valor_1>=$valor_2);
var_dump($resultado);
