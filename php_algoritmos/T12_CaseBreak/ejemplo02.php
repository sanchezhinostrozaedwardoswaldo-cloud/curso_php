<?php
/*Ejemplo 02: Operaciones matematicas en consola usando switch, case y break */
//Pedimos al usuario que ingrese dos numeros y una operador
echo "Ingrese el primer numero: ";
$numero1 = trim(fgets(STDIN));
echo "Ingrese el segundo numero: "; 
$numero2 = trim(fgets(STDIN));
echo "Ingrese la operacion (sumar, restar, multiplicar, dividir): ";
$operacion = strtolower(trim(fgets(STDIN)));

//Usamos switch para realizar la operacion matematica
switch ($operacion) {
    case "sumar":
        $resultado = $numero1 + $numero2;
        echo "El resultado de la suma $numero1 + $numero2 es: " . $resultado . PHP_EOL;
        break;
    case "restar":
        $resultado = $numero1 - $numero2;
        echo "El resultado de la resta $numero1 - $numero2 es: " . $resultado . PHP_EOL;
        break;
    case "multiplicar":
        $resultado = $numero1 * $numero2;
        echo "El resultado de la multiplicacion $numero1 * $numero2 es: " . $resultado . PHP_EOL;
        break;
    case "dividir":
        if ($numero2 != 0) {
            $resultado = $numero1 / $numero2;
            echo "El resultado de la division $numero1 / $numero2 es: " . $resultado . PHP_EOL;
        } else {
            echo "Error: No se puede dividir por cero." . PHP_EOL;
        }
        break;
    default:
        echo "Operacion no reconocida." . PHP_EOL;
        break;
}
?>