<?php
//do while primero se ejecuta el codigo

$c=1;
do{
    echo $c."<br>";
    $c++;

}while($c<=12);

echo "<h1>Tabla con Do while</h1>";


$c=1;
$num=5;
do{
    echo $num. " X " .$c. " = " .$num*$c."<br>";
    $c++;

}while($c<=12);

echo "<h1>Decremento Tabla con Do while</h1>";


$c=12;
$num=5;
do{
    echo $num. " X " .$c. " = " .$num*$c."<br>";
    $c--;

}while($c>=1);