<?php
    $mensaje = "";
    $esMayor = $_POST['edad'] >= 18;

    //comprobar si es mayor de edad que sea mayor de 18 años
    //mostrar Estás logueado o No tienes acceso a esta web

    if(isset($_POST['edad']) && $esMayor){
        $mensaje = "Eres mayor de edad";
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