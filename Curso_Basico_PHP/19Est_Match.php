<?php
/**match ramifica la evaluacion basada
 * en una comprobacion de identidad de 
 * un valor casi igual q el stiwch
 */

$a=7;
$x=10;
$y=9;
$z=7;

$resultado = match($a){
    $x => "Valor igual a X",
    $y=> "Valor igual a Y",
    $z=> "Valor igual a Z",
    default=> "Nel"
};

echo($resultado);

echo ("<br>");
echo ("<br>");

//Ejemplo
$edad = 18;
$res= match (true) {
     $edad >=60=>"Eres tercera edad" ,
     $edad >=30=>"Eres Adulto" ,
     $edad >=18=>"Eres Joven" ,
     default =>"Eres un Niño"
};
echo($res);