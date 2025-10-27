<?php
/*Ejmeplo 01*/
$frutas = array("manzana","naranja","plátano");

echo "Ejemplo 1: Primera fruta: " . $frutas[0] . "\n";
echo "Ejemplo 2: Segunda fruta: " . $frutas[1] . "\n";
?>

<?php
/*Ejemlo 2: Array con letras (Arreglo indexado) */
//Definir un arreglo con reglas
$letras = array("A", "B", "C", "D", "E");

//Usamos un ciclo foreach para recorrer el arreglo e imprimir cada letra
foreach ($letras as $letra){
    echo "Letra: " . $letra . "\n";
}
?>

<?php
/*Ejemlo 3: Array con números (Arreglo indexado)*/
//Declaramos un arreflo con números enteros y decimales
$numeros = array(10, 25.5, 30, 42.75);

//Mostramos valores individuales del arreglo
echo "Ejemplo 1: Primer número: " . $numeros[0]. "\n";
echo "Ejemplo 2: Segundo número: " . $numeros[1]. "\n";
echo "Ejemplo 3: Tercer número: " . $numeros[2]. "\n";
echo "Ejemplo 4: Cuarto número: " . $numeros[3]. "\n";

//Tambien podemos recorrerlos con un bucle
echo "\nListado completo de números\n";
foreach ($numeros as $num) {
    echo $num . "\n";
}
?>

<?php
/*Ejemplo 4: Operaciones con arreglos númericos*/
//Declaramos un arreglo con números (enteros y dicimales)
$numeros2 = array(10, 25.5, 30, 42.75);

//Mostrar valores individuales
echo "Primer número: " . $numeros2[0] . "\n";
echo "Segundo número: " . $numeros2[1] . "\n";
echo "Tercer número: " . $numeros2[2] . "\n";
echo "Cuarto número: " . $numeros2[3] . "\n\n";

//Calcular la sumna de todos los elementos
$suma = array_sum($numeros2);

//Contar cuantos elementos hay
$cantidad = count($numeros2);

//Calcular promedio
$promedio = $suma / $cantidad;

//Mostrar resultados
echo "Suma total: " . $suma . "\n";
echo "Cantidad de elementos: " . $cantidad . "\n";
echo "Promedio: " . number_format($promedio, 2) . "\n\n";

//Mostrar los números con foreach
echo "Listado de numeros: \n";
foreach ($numeros2 as $num2) {
    echo $num2 . "\n";
}
?>