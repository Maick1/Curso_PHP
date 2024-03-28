<?php

$c=1;
while($c<=20){
    echo $c."<br>";
    if($c==10){
        break;
    }
    $c++;
}
echo "<h1>Detener en foreach</h1>";
$laptop=["Amd","Lenovo","Asus","Hp","Dell","Toshiba"];
foreach($laptop as $componente){
    echo $componente."<br>";
    if($componente=="Dell"){
        break;
    }
}

echo "<h1>Detener con Continue</h1>";
$laptop=["Amd","Lenovo","Asus","Hp","Dell","Toshiba"];
foreach($laptop as $componente){
    if($componente=="Dell"){
        continue;
    }
    echo $componente."<br>";
}

echo "<h1>Detener con Continue ciclo for</h1>";
for($i=1;$i<=10;$i++){
    if($i==5){
        continue;
    }
    echo $i. "<br>";
}


echo "<h1>Detener con Continue ciclo for</h1>";
