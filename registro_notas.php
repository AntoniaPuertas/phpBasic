<?php
/**
 * Crea un array multidimensional para almacenar nombres de estudiantes y sus notas en diferentes asignaturas.
 * Calcula la nota media de cada estudiante.
 * Muestra una tabla con los datos de los estudiantes, sus notas y su nota media
 */

 $alumnos = [
    "Rocío" => ["Matemáticas" => 8, "Historia" => 7, "PHP" => 9],
    "Laura" => ["Matemáticas" => 2, "Historia" => 9, "PHP" => 7],
    "Reich" => ["Matemáticas" => 6, "Historia" => 7, "PHP" => 6],
    "MariSol" => ["Matemáticas" => 10, "Historia" => 10, "PHP" => 10]
 ];

 //para redondear 
 $nota = 6.78;
 $notaRedondeada = round($nota, 1);
 echo $notaRedondeada;


