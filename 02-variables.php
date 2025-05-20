<?php
//Definir variables
//los nombres de variables tienen que comenzar con el signo $
$nombre = "Pepito";
//A una variable le podemos asignar otro valor
$nombre = "Pepito junior";
$_nombre = "Manolita";

echo $nombre;
//Pueden comenzar con $_ 
//Pueden contener números pero no al comienzo
$nombre2 = "Javi";

//Definir constantes
//A las constantes no le podemos cambiar el valor
define("CLAVE" , "secreta");
//utilizar constante


//También se pueden definir de otra forma
//menos utilizada
const clave2 = "otra clave";

$noExiste = "Hola";

if(isset($noExiste)){
    echo $noExiste;
}else{
    echo 'No';
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>