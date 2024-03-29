<?php
$edad = 45;
$genero = "M";

if($genero=="M"){
    if($edad >=60){
        echo "Puede jubilarse";
    }else{
        echo "No puede jubilarse";
    }
}elseif($genero=="F"){
    if($edad >=50){
        echo "Puede jubilarse";
    }else{
        echo "No puede jubilarse";
    }
    
}else{
    echo "salado";
}