<?php
//hora, fecha 
//Documentacion https://www.php.net/manual/es/function.date-default-timezone-set.php

date_default_timezone_set("America/Guayaquil");
$fecha_us = date ("1 d F");
$fecha_es = date ("d-m-Y");

echo $fecha_es;

echo "<br>";
$hora_12 = date("h:i a");
echo $hora_12; 

echo "<br>";
$hora_24 = date("H:i A");
echo $hora_24; 

echo "<br>";
$fecha = date("1 d F Y H:i A");
echo $fecha; 

echo "<br>";
echo "<br>";

//Funcion de fecha

function fecha_actual($fechaaa=""){
    if ($fechaaa ==""){
        $fechaaa = date ("d-m-Y");
    }else{
        $fechaaa = date ("d-m-Y",strtotime($fechaaa));
    }


$fechaaa = explode ("-",$fechaaa);
$fecha_dia = $fechaaa[0];
$fecha_mes = $fechaaa[1];
$fecha_año = $fechaaa[2];

$mese_year = [
    "01" => "Enero",
    "02" => "Febrero",
    "03" => "Marzo",
    "04" => "Abril",
    "05" => "Mayo",
    "06" => "Junio",
    "07" => "Julio",
    "08" => "Agosto",
    "09" => "Septiembre",
    "10" => "Octubre",
    "11" => "Noviembre",
    "12" => "Diciembre"
];
$fecha_final = $fecha_dia." de " .$mese_year[$fecha_mes]. " de " .$fecha_año;

return $fecha_final;

}

echo fecha_actual();


echo "<br>";
echo "<br>";

function fecha_actual_2($fechaaa = "") {
    if ($fechaaa == "") {
        $fechaaa = date("d-m-Y");
    } else {
        $fechaaa = date("d-m-Y", strtotime($fechaaa));
    }

    $fecha_final = date("d \d\\e F \d\\e Y", strtotime($fechaaa));
    return $fecha_final;
}

echo fecha_actual_2();





