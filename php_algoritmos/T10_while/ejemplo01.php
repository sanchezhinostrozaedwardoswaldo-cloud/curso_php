<?php
$i = 1;
while ($i <= 10) {
    echo "El valor de i es: $i \n";
    $i++;
}
?>

<?php
//Usamos un ciclo while para imprimir los números del 1 al 100
$i = 1;
while ($i <= 100) {
    echo "El valor de i es: $i \n";
    $i++;
}
?>

<?php
//Sumar los numeros del 1 al 10 usando while
//Inicialisamos variables
$i = 1;
$suma = 0;
//usamos un cliclo while para sumar los numeros del 1 al 10
while ($i <= 10) {
    $suma += $i; //equivalente a $suma = $suma + $i
    $i++;
}
//Mostramos el resultado
echo "La suma de los números del 1 al 10 es: $suma";
?>