<?php
//unicamente para iterar valor y clave de un arrays

$laptop=["Amd","Lenovo","Asus","Hp","Dell","Toshiba"];

//Array asociativo
$frutas=[
    "fresas"=>100,
    "peras"=>30,
    "Sandia"=>10,
    "melon"=>17,
];

//Codigoa repetir; valor o clave(caulquier nombre)
foreach ($laptop as $clave=> $valor){
    echo $clave." - ".$valor."<br>";
}
