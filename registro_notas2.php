<?php
//Crear una función que tome como argumento un array asociativo y devuelva un string con el html de los valores del array en una tabla

 $alumnos = [
    "Rocío" => ["Matemáticas" => 8, "Historia" => 7, "PHP" => 9],
    "Laura" => ["Matemáticas" => 2, "Historia" => 9, "PHP" => 7],
    "Reich" => ["Matemáticas" => 6, "Historia" => 7, "PHP" => 6],
    "MariSol" => ["Matemáticas" => 10, "Historia" => 10, "PHP" => 10]
 ];

 function displayNotas(Array $array):string{
    $tabla = '';
    
    return $tabla;
 }

 echo displayNotas($alumnos);