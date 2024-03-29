<?php
    if(1>7){
        echo("Verdadero");
    }else{
        echo ("Falso");
    }
    echo ("<br>");
    echo ("<br>");
    //version actual
    if(1<7):
        echo("Verdadero");
    else:
        echo ("Falso");
    endif;

    //Ejercicio
    echo ("<br>");
    echo ("<br>");

    $cantidad = 9;
    if($cantidad>5){
        $total = $cantidad*800;
        echo("Precio Total es: " .$total);
    }else{
        $total = $cantidad*700;
        echo("Precio Total es: " .$total);
    }

    echo ("<br>");
    echo ("<br>");

    //Ejercicio #2

    $n1 = 5;
    $n2 = 10;
    $n3 = 8;
    $total_p= ($n1+$n2+$n3)/3;

    if ($total_p > 7) {
        echo("Aprobado: " .number_format($total_p, 2));
    } else {
        echo("Reprobó: " .number_format($total_p, 2));
    }

