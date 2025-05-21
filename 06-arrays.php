<?php
//ordenar los elementos de un array indexado
$numeros = [5, 2, 8, 1, 3];

//ordenar de menor a mayor
//modifica el array
sort($numeros);

foreach($numeros as $numero){
    echo "<p>$numero</p>";
}

//ordenar de mayor a menor
rsort($numeros);
foreach($numeros as $numero){
    echo "<p>$numero</p>";
}

$edades = array("Juan" => 35, "María" => 28, "Pedro" => 42);
//ordenar arrays asociativos
//por clave de menor a mayor
ksort($edades);
foreach($edades as $clave => $valor){
    echo "<p>Nombre: $clave tiene $valor años</p>";
}
//por clave de mayor a menor krsort()

//por valor de menor a mayor
asort($edades);
foreach($edades as $clave => $valor){
    echo "<p>Nombre: $clave tiene $valor años</p>";
}
//por valor de mayor a menor arsort()

/**
 * sort() ordenar
 * rsort() reverse ordenar
 * asort() asociativo ordenar
 * arsort() asociativo reverse ordenar
 * ksort() key ordenar
 * krsort() key reverse ordenar
 */

 //Agregar y eliminar elementos de un array
 $frutas = ["Manzana", "Pera"];

 //agregar elementos al final
 array_push($frutas, "Naranja", "Fresa");

 //eliminar elemento al final
 array_pop($frutas);

 // Eliminar los últimos 3 elementos
array_splice($frutas, -3);

//Agregar elementos al principio
array_unshift($frutas, "Melón", "Sandía");

//Eliminar el primer elemento
array_shift($frutas);

//Eliminar un elemento específico
unset($frutas[1]);

echo "<ul>";
foreach($frutas as $fruta){
    echo "<li>$fruta</li>";
}
echo "</ul>";