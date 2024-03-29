<?php
$cadena_texto= "hola mundo";

//funcion para cponverti en minusculas
$cadena_texto = strtolower($cadena_texto);

//Funcion en mayuscula
$cadena_texto = strtoupper($cadena_texto);


//Funcion Primera letra en Mayuscula
$cadena_texto = ucfirst($cadena_texto);

//Primeras letras en mayuscula
$cadena_texto = ucwords($cadena_texto);
echo $cadena_texto;

echo "<br>";
echo "<br>";

//Contar Caracteres
$cadena= "hola mundo Php q tiro";
$longitud = strlen($cadena);
echo $cadena.", tiene ".$longitud." Caracteres";


echo "<br>";
echo "<br>";

//Contar Palabras
$palabras = str_word_count($cadena);
echo $cadena.", tiene ".$palabras." Palabras";
