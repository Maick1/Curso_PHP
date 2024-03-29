<?php
//Ciclo For
//var;condicion;++ o --
/* for($i=1;$i<=20;$i++){
    echo $i. "<br>";

}

echo "<h1>Tabla con ciclo For</h1>";
$num= 7;
for($i=1;$i<=12;$i++){
    echo $num." x ".$i." = ".$i. "<br>";

}

echo "<h1>Decremento Tabla con ciclo For</h1>";
$num= 7;
for($i=12;$i>=1;$i--){
    echo $num." x ".$i." = ".$i. "<br>";

} */

$numero = $_POST['numero'];
for ($i = 1; $i <= 12; $i++) {
    echo $numero . " x " . $i . " = " . $i * $numero . "<br>";
}
