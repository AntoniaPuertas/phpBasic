<?php

/**
 * Los arrays son estructuras de datos que permiten almacenar múltiples valores en una sola variable
 * En PHP existen tres tipos de arrays:
 * 1. Arrays indexados
 * 2. Arrays asociativos
 * 3. Arrays multidimensionales
 */

 //Arrays indexados
 $frutas = array(
    "Manzana", 
    "Pera", 
    "Naranja"
);

 //Forma más común
 $frutas2 = ["Limón", "Pomelo", "Fresa"];

 //Asignar valores
 $colores = array();
 $colores[0] = "Rojo";
 $colores[1] = "Verde";

 //Acceder a los elementos
 echo $frutas[0];
 echo $frutas2[1];

 //Arrays asociativos
 $edad = array("Juan" => 35, "María" => 28, "Pedro" => 42);

 $edad2 = ["Juan" => 35, "María" => 28, "Pedro" => 42];

 echo '<br>';
 echo $edad2['María'];
echo '<br>';


 //Arrays multidimensionales
 $empleados = array(
    array("Juan", "López", "Desarrollador"),
    array("María", "González", "Diseñadora"),
    array("Pedro", "Sánchez", "Gerente")
 );

 //acceder a González
 echo $empleados[1][1];

 $productos = array(
    "frutas" => array(
        "Tropical" => array("mango", "piña"),
        "Cítricos" => array("naranja", "limón")
    ),
    "verduras" => array("zanahoría", "apio")
 );

 //acceder a limón
 echo $productos['frutas']['Cítricos'][1];

 //productos de Javi vi: id, nombre, descripción, precio, tallas(s, m, l, xl), url, características

 $productosJavi = [
    "id" => 1,
    "nombre" => "Arnés",
    "descripcion" => "Diseño étnico con material ecológico",
    "precio" => 24.99,
    "tallas" => ["s", "m", "l", "xl"],
    "url" => "img/arnes.jpg",
    "caracteristicas" => ["Ajuste ergonómico", "Tecnología anti tirones", "Diseñado para evitar rozaduras"]
 ];

 //Acceder a la url
 echo $productosJavi['url'];
 //Acceder a Diseñado para evitar rozaduras
 echo $productosJavi['caracteristicas'][2];

 $productosJavi2 = [
    [
    "id" => 1,
    "nombre" => "Arnés",
    "descripcion" => "Diseño étnico con material ecológico",
    "precio" => 24.99,
    "tallas" => ["s", "m", "l", "xl"],
    "url" => "img/arnes.jpg",
    "caracteristicas" => ["Ajuste ergonómico", "Tecnología anti tirones", "Diseñado para evitar rozaduras"]
    ],
    [
    "id" => 2,
    "nombre" => "Arnés",
    "descripcion" => "Diseño étnico con material ecológico",
    "precio" => 24.99,
    "tallas" => ["s", "m", "l", "xl"],
    "url" => "img/arnes.jpg",
    "caracteristicas" => ["Ajuste ergonómico", "Tecnología anti tirones", "Diseñado para evitar rozaduras"]
    ],
    [
    "id" => 3,
    "nombre" => "Arnés",
    "descripcion" => "Diseño étnico con material ecológico",
    "precio" => 24.99,
    "tallas" => ["s", "m", "l", "xl"],
    "url" => "img/arnes.jpg",
    "caracteristicas" => ["Ajuste ergonómico", "Tecnología anti tirones", "Diseñado para evitar rozaduras"]
 ]
    ];

//Recorrer un array con bucles
$frutas2 = ["Limón", "Pomelo", "Fresa"];
echo '<br>';

//count(nombreArray) devuelve el número de elementos del array
//bucle for
echo '<p>Frutas de temporada</p>';
echo '<ul>';
for($i = 0 ; $i < count($frutas2) ; $i++){
    echo '<li>' . $frutas2[$i] . '</li>';
}
echo '</ul>';

//bucle foreach para arrays indexados
foreach($frutas2 as $fruta){
    echo "$fruta  <br>";
}

//bucle foreach para arrays asociativos
$edad = array("Juan" => 35, "María" => 28, "Pedro" => 42);

echo '<br>';
foreach($edad as $clave => $valor){
    echo "$clave tiene $valor años. <br>";
}
echo '<br>';

//Ejercicio: Crea un array con 5 productos de supermercado. Muestra los productos en formato de lista en HTML
