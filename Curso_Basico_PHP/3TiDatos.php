<?php

##Booleanos boolean
##Enteros integer
#flotantes double
#cadenas string

#variables se representan con un $
#empieza con una letra o guion bajo
#variables sensible a mayuscula y minusculas

#upper camel case
$NombreCompleto = "Michael Tomala";

#lower camel case
$nombreCompleto = "Michael Tomala";

#snake csase
$nombre_completo = "Michael Tomala";

##Variables predefinidas

/*GLOBALS
$_SERVER
$_GET
$_POST
$_FILES
$_REQUEST
$_SESSION
$_ENV
$_COOKIE
$_php_errormsg
$_HTTP_RAW_POST_DATA
$_http_response_header
$_argc
$_argv
$_this */

/***********************************************************/ 
/////////Contastes no llevan signo de $
const NAME = "Melas";
echo NAME;
/* Constante predefinidas
_ _ LINE _ _
_ _ FILE _ _
_ _ DIR _ _
_ _ FUNCTION _ _ 
_ _ CLASS _ _
_ _ TRAIT _ _
_ _ METHOD _ _
_ _ NAMESPACE _ _
ClassName :: class*/

//podemos definir un array

define("ALUMNOS",array("Jose","Pepe"));
echo ALUMNOS[1];
