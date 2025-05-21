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

echo '<p>Notas de los alumnos / alumnas</p>';
echo '<table border="1">';
// echo '<tr>
//       <th>Nombre</th>
//       <th>Matemáticas</th>
//       <th>Historia</th>
//       <th>PHP</th>
//       <th>Media</th>
//       </tr>';
      $ponerCabecera = true;
      foreach($alumnos as $nombre => $datos){
         //$datos es un array asociativo con las asignaturas y las notas
         //este if se ejecuta solo una vez
         if($ponerCabecera){
            echo '<tr>';
            echo '<th>Nombre</th>';
            foreach($datos as $nombreAsignatura => $notaAsignatura){
               echo '<th>'. $nombreAsignatura.'</th>';
            }
            echo '<th>Media</th>';
            echo '</tr>';
            $ponerCabecera = false;
         }
         //en notaMedia voy acumulando el valor de las notas
         $notaMedia = 0;

         echo '<tr>';
         echo "<td>$nombre</td>";
         foreach($datos as $nombreAsignatura => $notaAsignatura){
            echo "<td>$notaAsignatura</td>";
            $notaMedia += $notaAsignatura;
         }
         echo "<td>" . number_format(round($notaMedia / count($datos),2),2, ",", ".") . "</td>";
         echo '</tr>';
      }
echo '</table>';



