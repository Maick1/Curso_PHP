<?php
//manipular el archivo

//recibe el nombre
/* echo $_FILES ['fichero']['name']."<br>";

//recibe la ruta
echo $_FILES ['fichero']['tmp_name']."<br>";

//recibe el tipo
echo $_FILES ['fichero']['type']."<br>";

//Error de la carga si es 0 correcto
echo $_FILES ['fichero']['error']."<br>";

//tamaño en bites
echo $_FILES ['fichero']['size']."<br>";
 */

 //tipos de fichero admitidos
 if(mime_content_type($_FILES ['fichero']['tmp_name'])!="application/pdf"){
    echo "tipo de fichero";
    exit();
 }

 //Limnitar peso de los archivos
 if($_FILES ['fichero']['size']/1024>3072){
    echo "Archivo supera el peso permitido";
    exit();
 }


 //si existe un directorio
if(!file_exists("archivos")){

    //crear directorio o carpeta
    if(mkdir("archivos",0777)){
        echo "Error al crear el directorio";
        exit();
    }

}

//dar permiso a la carpeta
chmod("archivos",0777);

//mover archivos, paso ruta
if (move_uploaded_file($_FILES ['fichero']['tmp_name'],"archivos/".$_FILES ['fichero']['name'])){
    echo "Archivo subido con Exito";
}else{
    echo "error";
}
