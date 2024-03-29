<?php
/* $nombre = $_POST['nombre'];
$asignatura = $_POST['asignatura'];
$frutas = $_POST['frutas'];

//almaceno valor
echo $nombre." - ".$asignatura." - ".$frutas;
 */
 
$materias = $_POST['asignatura'];
 foreach($materias as $asignatura){
    echo $asignatura."<br>";

 }

 echo "<br>";
 echo "<br>";
 echo "<br>";

 $fresa = $_POST ['frutas'];
 foreach($fresa as $fruta){
    echo $fruta."<br>";

 }
