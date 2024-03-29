<?php
//Hash sirve para encriptar contraseña 

$clave = "Hola Mundo";

$clave_procesada = password_hash($clave,PASSWORD_BCRYPT,["cost"=>11]);

//Verificar password

if (password_verify($clave,$clave_procesada)){
    echo "Coinciden";
}