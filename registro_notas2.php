<?php
//Crear una función que tome como argumento un array asociativo y devuelva un string con el html de los valores del array en una tabla

 $alumnos = [
    "Rocío" => ["Matemáticas" => 8, "Historia" => 7, "PHP" => 9],
    "Laura" => ["Matemáticas" => 2, "Historia" => 9, "PHP" => 7],
    "Reich" => ["Matemáticas" => 6, "Historia" => 7, "PHP" => 6],
    "MariSol" => ["Matemáticas" => 10, "Historia" => 10, "PHP" => 10]
 ];

 function displayNotas(Array $alumnos):string{
    $tabla = '';
    $tabla .= '<p>Notas de los alumnos / alumnas</p>';
    $tabla .= '<table border="1">';
      $ponerCabecera = true;
      foreach($alumnos as $nombre => $datos){
         //$datos es un array asociativo con las asignaturas y las notas
         //este if se ejecuta solo una vez
         if($ponerCabecera){
            $tabla .= '<tr>';
            $tabla .= '<th>Nombre</th>';
            foreach($datos as $nombreAsignatura => $notaAsignatura){
               $tabla .= '<th>'. $nombreAsignatura.'</th>';
            }
            $tabla .= '<th>Media</th>';
            $tabla .= '</tr>';
            $ponerCabecera = false;
         }
         //en notaMedia voy acumulando el valor de las notas
         $notaMedia = 0;

         $tabla .= '<tr>';
         $tabla .= "<td>$nombre</td>";
         foreach($datos as $nombreAsignatura => $notaAsignatura){
            $tabla .= "<td>$notaAsignatura</td>";
            $notaMedia += $notaAsignatura;
         }
         $tabla .= "<td>" . number_format(round($notaMedia / count($datos),2),2, ",", ".") . "</td>";
         $tabla .= '</tr>';
      }
        $tabla .= '</table>';
    return $tabla;
 }

 echo displayNotas($alumnos);