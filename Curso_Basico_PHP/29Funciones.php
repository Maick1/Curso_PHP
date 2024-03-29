<?php
//funciones propias de php
//funcion conjutno de instrucciones

/*un nombre de funcion valido comienza con una
letra o guin bajo seguido de cualquier numero de letras, 
numeros o guiones bajos*/

//function nombre_de_funcion ($parametros){}

function saludo($nombre){
    return "Hola mi nombre es: $nombre";
}

//Llamar funcion
$usuario = "Tom";
echo saludo($usuario);
echo "<br>";
echo saludo($usuario="Pepe");

echo "<br>";
echo "<br>";

function promedio_alumno($n1, $n2,$n3){
    $promedio = ($n1 + $n2 +$n3)/3;
    return $promedio;
}
echo "El promedio es: " .promedio_alumno(7,8,9);