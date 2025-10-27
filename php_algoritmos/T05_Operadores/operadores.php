<?php
    $a = 10;
    $b = 5;

    //Operaciones aritmeticas
    $suma = $a + $b;
    $resta = $a - $b;
    $multiplicacion = $a * $b;
    $division = $a / $b;

    echo "Suma: $suma<br>"; 
    echo "Resta: $resta<br>"; 
    echo "Multiplicación: $multiplicacion<br>"; 
    echo "División: $division<br>"; 
?>

<?php
    /*Determina el total a pagar, considerando que el salario por mes es 3500 y el trabajador se le debe de 14 meses*/ 

    $pago_mes= 3500;
    $deuda_mes = 14;
    $empleado = "Juan Perez";

    $total_pagar = $pago_mes * $deuda_mes;

    echo "El total a pagar al empleado " . $empleado . " es de: " . $total_pagar;
?>
