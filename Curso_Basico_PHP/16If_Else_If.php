<?php
//Estructura condicional multiple
/*Sintaxis
if()
echo
elseif()
echo
else:
    echo
endif; */

$dia = 2; 

if ($dia == 1) {
    echo("Día Lunes");
} elseif ($dia == 2) {
    echo("Día Martes");
} elseif ($dia == 3) {
    echo("Día Miércoles");
} elseif ($dia == 4) {
    echo("Día Jueves");
} elseif ($dia == 5) {
    echo("Día Viernes");
} elseif ($dia == 6) {
    echo("Día Sábado");
} elseif ($dia == 7) {
    echo("Día Domingo");
} else {
    echo("El valor de dia no es válido");
}

echo ("<br>");
echo ("<br>");

//Ejercicio #2

$dia = 8; 

$dias_semana = [
    1 => "Lunes",
    2 => "Martes",
    3 => "Miércoles",
    4 => "Jueves",
    5 => "Viernes",
    6 => "Sábado",
    7 => "Domingo"
];

echo isset($dias_semana[$dia]) ? "Día " . $dias_semana[$dia] : "Valor de día no válido";


echo ("<br>");
echo ("<br>");

#ejercicio #3
$cant = 12;
$totalPc = $cant*700;

if($cant<5){
    $totalPc = $totalPc -($totalPc*0.10);
}elseif ($cant>=5 && $cant<10){
    $totalPc = $totalPc -($totalPc*0.20);
}elseif($cant>=10){
    $totalPc = $totalPc -($totalPc*0.40);
}
echo ("Total a Pagar: " .$totalPc);


