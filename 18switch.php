<?php
//Estructura de igualdad

$fruta = "o";
switch($fruta){
    case "Fresa":
        echo "Eres una Fresa";
    break;
    case "Pera":
        echo "Eres una Pera";
    break;
    default:
    echo "no eres nada";
}


echo ("<br>");
echo ("<br>");

//Ejercicio#1 
$dia = 2; 

switch ($dia) {
    case 1:
        echo("Día Lunes");
        break;
    case 2:
        echo("Día Martes");
        break;
    case 3:
        echo("Día Miércoles");
        break;
    case 4:
        echo("Día Jueves");
        break;
    case 5:
        echo("Día Viernes");
        break;
    case 6:
        echo("Día Sábado");
        break;
    case 7:
        echo("Día Domingo");
        break;
    default:
        echo("El valor de día no es válido");
}
