<?php
    $mensaje = "";

    //comprueba el nombre y la clave del usuario
    //devuelve verdadero o falso según sean correctas las credenciales
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

    //leer los datos de entrada
    if(isset($_POST['nombre']) && isset($_POST['password']) && comprobarCredenciales($_POST['nombre'], $_POST['password'])){
        $mensaje = "Enhorabuena " . $_POST['nombre'] . " Te has logueado correctamente";
    }else{
        $mensaje = "Usuario o contraseña incorrecto";
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