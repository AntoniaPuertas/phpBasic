<?php
/**
 * Crea un sistema de gestión de tareas
 */

//Arreglo para almacenar las tareas
$tareas = [];

//función para agregar una tarea
//recibe como parámetros un array de tareas, título, descripción y prioridad
//crea una tarea y la añade al array $tareas
function agregarTarea($tareas, $titulo, $descripcion, $prioridad){
    $tareaNueva = [
        "id" => count($tareas),
        "Titulo" => $titulo,
        "Descripcion" => $descripcion,
        "Prioridad" => $prioridad,
        "Estado" => "pendiente",
        "fecha_creacion" => date("Y-m-d H:i:s")
    ];
    array_push($tareas, $tareaNueva);
    return $tareas;
}

//funcion que reciba un array de tareas y devuelva un string con el html mostrando las tareas
function mostrarTareas($tareas){
    $html = '<ul>';
    foreach($tareas as $tarea){
        $html .= '<li>';
        $html .= "<h3>{$tarea['id']}</h3>";
        $html .= "<h4>{$tarea['Titulo']}</h4>";
        $html .= "<p>{$tarea['Descripcion']}</p>";
        $html .= "<p>{$tarea['Prioridad']}</p>";
        $html .= "<p>{$tarea['Estado']}</p>";
        $html .= "<p>{$tarea['fecha_creacion']}</p>";
        $html .= '</li>';
    }
    $html .= '</ul>';
    return $html;
}

//función para cambiar el estado de una tarea
//recibe el array de tareas, el id de la tarea a modificar y el nuevo estado
function cambiarEstadoTarea($tareas, $id, $nuevoEstado){
    foreach($tareas as &$tarea){
        if($tarea['id'] === $id){
            $tarea['Estado'] = $nuevoEstado;
        }
    }
    return $tareas;
}

//función para eliminar una tarea
//recibe el array de tareas y el id de la tarea a eliminar
function eliminarTarea(&$tareas, $id){
    foreach($tareas as $key => $tarea){
        if($tarea['id'] === $id){
            unset($tareas[$key]);
        }
    }
}


//probar el código
 $tareas = agregarTarea($tareas, "Crear una lista de tareas", "Utilizar PHP", "Inmediata");
 $tareas = agregarTarea($tareas, "Salir a pasear", "Si no llueve", "Urgente");
 $tareas = agregarTarea($tareas, "Desayunar", "Antes de las doce", "Normal");

 echo mostrarTareas($tareas);

 $tareas = cambiarEstadoTarea($tareas, 0, "Completada");

echo mostrarTareas($tareas);

eliminarTarea($tareas, 0);

echo '<h2>Tareas actualizadas</h2>';
echo mostrarTareas($tareas);


