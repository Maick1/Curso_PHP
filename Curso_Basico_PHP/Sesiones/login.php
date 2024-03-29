<?php
//validaciones a los formularios backend
if (!preg_match("/^[a-zA-Z]{3,10}$/", $_POST['usuario'])) {
    echo "Incorrecto";
    exit();
}

//validaciones a los formularios backend
if (!preg_match("/^[a-zA-Z0-9$@.]{4,30}$/", $_POST['clave'])) {
    echo "Incorrecto";
    exit();
}



if ($_POST['usuario'] == "Michael" && $_POST['clave'] == "1234") {
    session_name('LOGIN');
    session_start();
    $_SESSION["Nombre"] = "Michael";
    $_SESSION["Apellido"] = "Tomalá";
    $_SESSION["Pais"] = "Ecuador";

    //redireccinar

    if(headers_sent()){
        echo "<script>window.location.href= 'contador.php';</script>";
    }else{
        header("Location: contador.php");
    }
}else {
    echo "Datos Incorrectos";
}
