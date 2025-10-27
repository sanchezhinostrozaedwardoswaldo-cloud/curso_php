<?php
$numero = (float) readline("Ingresa un número: ");
if ($numero > 0) {
    echo "Ejemplo 1: El número es positivo.\n";
} elseif ($numero < 0) {
    echo "Ejemplo 2: El número es negativo.\n";
} else {
    echo "Ejemplo 3: El número es cero.\n";
}
?>