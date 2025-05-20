<?php
    $mensaje = "";

    function comprobarCredenciales($nombre, $clave){
        $respuesta = false;
        //TODO: llamo a la base de datos para que me devuelva el nombre y la clave del usuario
        $nombreUsuario = "Antonia";
        $claveUsuario = "123456";

        //quitar los espacios a las variables
        $nombre = trim($nombre);
        $clave = trim($clave);

        return $nombreUsuario === $nombre && $claveUsuario === $clave;
    }

    //comprobar que me llegan los datos: nombre, clave y edad
    //comprobar que las credenciales son válidas
    //comprobar que la edad es mayor o igual a 18
    $existenDatos = isset($_POST['nombre']) && isset($_POST['password']) && isset($_POST['edad']);
    $credencialesValidas = comprobarCredenciales($_POST['nombre'], $_POST['password']);
    $esMayor = $_POST['edad'] >= 18;

    if($existenDatos && $credencialesValidas && $esMayor){
        $mensaje = "Tienes acceso";
    }else{
        $mensaje = "No tienes acceso";
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logueado</title>
</head>
<body>
    <h1>Página de entrada</h1>
    <h2> 
        <?php
            echo $mensaje;
        ?>
    </h2>
</body>
</html>