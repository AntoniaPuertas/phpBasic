<?php
    var_dump($_POST);

    $nombreUsuario = "Antonia";
    $clave = "123456";
    $mensaje = "";

    if(isset($_POST['nombre']) && isset($_POST['password'])){
        $nombreEntrada = trim($_POST['nombre']);
        $claveEntrada = trim($_POST['password']);

        if($nombreUsuario === $nombreEntrada && $clave === $claveEntrada){
            $mensaje = "Enhorabuena " . $nombreEntrada . " Te has logueado correctamente";
        }else{
            $mensaje = "Usuario o contraseña incorrecto";
        }
        
    }else{
        $mensaje = "Datos insuficientes";
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