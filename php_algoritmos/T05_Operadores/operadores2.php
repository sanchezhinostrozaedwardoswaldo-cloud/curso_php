<?php
    /*Operaciones basicas con ingresos en valores por consola*/
    /*Leer el ingreso desde teclado*/

    $num1 = (int) readline("Ingresa el primer numero: ");
    $num2 = (int) readline("Ingrese el segundo numero: ");

    //Raealizar las operaciones basicas
    $suma = $num1 + $num2;
    $resta = $num1 - $num2;
    $multiplicacion = $num1 * $num2;
    
    //Validamos la division entre 0
    if ($num2 != 0){
        $division = $num1 / $num2;
    }else{
        $division="Error: Division por cero no es permitido.";
    }

    //Mostrar los resultados
    echo "Reultado de las operacines basicas";
    echo "La suma de $num1 + $num2 es: $suma\n";
    echo "La resta de $num1 - $num2 es: $resta\n";
    echo "La multiplicación de $num1 * $num2 es: $multiplicacion\n";
    echo "La división de $num1 / $num2 es: $division\n";
?>