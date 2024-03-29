<?php

$texto = "Ecuador ";

#lleva el primer valor asignado
$variable = $texto;

#puede cambiar el valor asignado
$variable_2 = &$texto;

echo "<br>",$variable_2;

$texto = "Japon ";
echo "<br>",$variable_2;
