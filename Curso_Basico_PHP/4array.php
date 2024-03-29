<?php

#array escalares
$estudiantes= ["Pepe","Juanito","Pelambre","Julio","Igor"];
$estudiantes[4] = "Angulo";
echo $estudiantes[4];

#array Asociativo clave / valor
$tutor= ["nombre"=>"Carlos",
        "apellido"=>"Alfaro",
        "edad"=>27];

echo $tutor["edad"];

#array Multidimensionales tiene dos dimensiones
$tutor_2= ["nombre"=>"Carlos",
        "apellido"=>"Alfaro",
        "edad"=>27,
    "curso"=>["PHP","Python","C++"]];

echo $tutor_2["curso"][2];

#modificar el valor
echo $tutor_2["curso"][2]="Js";

#contarr elementos de un array
echo count ($estudiantes);

echo count ($tutor_2,COUNT_RECURSIVE);




