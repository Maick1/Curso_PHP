<?php
/* $nu = 9;

//Destruir o eliminar una variable
unset ($nu);

if(is_null($nu)){
    echo "Es nula";

}else{
    echo "No es nula";
}

//funcion empty comprobar variable vacia 

$num = "";

echo "<br>";
//Destruir o eliminar una variable

//verifica si no esta definida
if(empty($num)){
    echo "Esta Vacia";

}else{
    echo "No esta vacia";
}

//isset comprobar si la varibale esta definida o no null
echo "<br>";
echo "<br>";

$num1 = 7;
unset ($num1);

if(isset($num1)){
    echo "Esta definida";

}else{
    echo "No esta definida";
}
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="numero">
        <button type="submit">enviar</button>
    </form>
    <?php 
    echo "<br>";
    if (isset($_POST['numero'])&& $_POST['numero']!=""){
        include "./22For.php";
    }

    ?>
    
</body>
</html>