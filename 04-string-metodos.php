<?php
$texto = "El batracio amarillo";

//la longitud de un string
echo strlen($texto);
echo '<br>';
var_dump($texto);

//eliminar espacios del principio y del final de un string
$texto2 = "           En un lugar de la Mancha...           ";
echo strlen($texto2);
echo '<br>';
var_dump($texto2);
echo '<br>';
$texto2 = trim($texto2);
echo strlen($texto2);
echo '<br>';
var_dump($texto2);
echo '<br>';

//convertir a mayúsculas
echo strtoupper($texto2);
echo '<br>';

//Concatenar strings
//Se concatena con el .
echo "Título ".$texto." publicado";
echo '<br>';
echo "Título $texto publicado";
