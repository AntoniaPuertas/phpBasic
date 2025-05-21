<?php
//Las funciones son bloques de código reutilizables que realizan una tarea específica y pueden ser llamadas múltiples veces en un programa

//Sintaxis básica
//puede recibir cero, uno o más parámetros
//puede devolver un valor o no
function nombreDeLaFuncion($parametro1, $parmetro2){
    //Ejecutamos código
    $resultado = 1;
    return $resultado;
}

function saludar($nombre){
    return "Hola, $nombre";
}

//llamar a la función
echo saludar("Inma");

function getHoraActual(){
    return date("h:i:s");
}

echo '<br>';
echo getHoraActual();

//Parámetros
function saludarPersona($nombre, $saludo = "Hola"){
    return "$saludo, $nombre";
}
echo '<br>';
echo saludarPersona("Javi");
echo '<br>';

echo saludarPersona("Jesús", "Buenos días");
echo '<br>';

//Número variable de parámetros
function sumarTodos(...$numeros){
    var_dump($numeros);
    echo '<br>';
    return array_sum($numeros);
}

$resultado = sumarTodos(2, 4, 5, 6);
echo $resultado;

//puedes especificar el  tipo de parámetros y el tipo de retorno
function multiplicar(float $numero1, float $numero2):float{
    return $numero1 * $numero2;
}

echo '<br>';
echo multiplicar(2, 2.2);

//variables globales
$contador = 0;
function incrementarContador(){
    $GLOBALS['contador']++;

}
echo '<br>';
incrementarContador();
echo $contador;

//Crea una función que actúe como una calculadora básica
//El valor de la operación por defecto es sumar
//poner el tipo de los parámetros y del valor a devolver
function calculadora(float $num1, float $num2, string $operacion = 'suma'):float|string{
    switch(strtolower($operacion)){
        case 'suma':
            return $num1 + $num2;
        case 'resta':
            return $num1 - $num2;
        case 'multiplicacion':
            return $num1 * $num2;
        case 'division':
            if($num2 == 0){
                return "No se puede dividir por cero";
            }
            return $num1 / $num2;
        default:
            return "Operación no válida";
    }
}

echo calculadora(2, 4);
echo calculadora(4, 6, "division");

echo calculadora(3,  5, "Suma");


//recursividad: una función se llama a sí misma
//función que calcula el factorial de un número $n

function factorial($n){
    if($n <= 1){
        return 1;
    }
    return $n * factorial($n - 1);
}

echo factorial(7);

//factorial con bucle
$n1 = 7;
$total = 1;
for($i = $n1 ; $i >= 1 ; $i--){
    $total = $i * $total;
}
echo "<p>$total</p>";