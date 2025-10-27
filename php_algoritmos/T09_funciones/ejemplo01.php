<?php
function saludar($nombre) {
    return "Hola, " . $nombre . "!";
}

echo saludar("Juan");
?>

<?php
/*Ejemplo 02: Función para sumar dos números */
function sumar($a, $b) {
    return $a + $b;
}

/*Llamar a la funcion y mostrar el resultado*/
$resultado = sumar(5, 10);
echo "La suma es: " . $resultado;
?>

<?php
/*Elabora un algoritmo en php utilizando funciones que permita determinar el area de un trianguló*/
$baseTriangulo = readline("Ingresa la medida de la base del triangulo: ");
$alturaTriangulo = readline("Ingrese la altura del triangulo: ");

function areaTriangulo($base, $altura){
    return ($base * $altura) / 2;
}
$resultado1 = areaTriangulo($baseTriangulo,$alturaTriangulo);

echo "El area del triangulo es: $resultado1";