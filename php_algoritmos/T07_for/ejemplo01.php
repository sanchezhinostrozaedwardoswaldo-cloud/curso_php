<?php
for ($i = 60; $i <= 100; $i++) {
    echo "Ejemplo 1: Iteración $i \n";
}
?>

<?php
//Ejemplo 02:Imprimir los número del 1 al 10
for ($i = 1; $i <= 10; $i++) {
    echo "Numero: " . $i . "\n";
}
?>

<?php
//Ejemplo 03: Imprimir los primeros cinco elementos de un arreglo

// Definición del arreglo
$frutas = array("Manzana", "Banana", "Cereza", "Durazno", "Uva");

// Usamos un cliclo for para el arreglo
for ($i = 0; $i < count($frutas); $i++) {
    echo "Fruta " . ($i + 1) . ": " . $frutas[$i] . "\n";
}
?>

<?php
/*Crear un arreglo para imprimir los meses del año utiliza el for para el recorrido; ademas captura el mes equivalente a tu cumpleaños*/
$meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

for ($i = 0; $i < count($meses); $i++){
    echo "Mes " . ($i + 1) . ": " . $meses[$i] . "\n";
    if($i == 9){
    echo "Mi cumpleaños es: " . $meses[$i] . "\n";
    }
}
?>