<?php
//Búsqueda en arrays
$frutas = ["Pera", "Manzana", "Sandía"];

//Comprobar si un elemento existe en el array
if(in_array("Sandía", $frutas)){
    echo "<p>Tenemos Sandía</p>";
}else{
    echo "<p>Hay que comprar Sandía</p>";
}

$edades = array("Juan" => 35, "María" => 28, "Pedro" => 42, "Toñi" => 44);
//isset() comprueba si una clave existe en un array asociativo
if(isset($edades['Toñi'])){
    echo "<p>Toñi está en el grupo</p>";
}else{
    echo "<p>Falta Toñi</p>";
}

if(in_array(35, $edades)){
    echo "<p>Alguien tiene 35 años</p>";
}else{
    echo "<p>Nadie tiene 35 años</p>";
}

//Encontrar la clave de un valor
$clave = array_search(28, $edades);
echo $clave;