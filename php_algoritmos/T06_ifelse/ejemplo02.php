<?php
/*Ejemplo 2: de codigó PHP para determinar el mes*/
//Solicitamos el número del mes al usuario

/*$mes = (int) readline("Ingresa el numero de mes (1 al 12): ");

//Usamos if y else if para determinar el nombre del mes
if ($mes == 1) {
    echo "Enero";
} elseif ($mes == 2) {
    echo "Febrero";
} elseif ($mes == 3) {
    echo "Marzo";
} elseif ($mes == 4) {
    echo "Abril";
} elseif ($mes == 5) {
    echo "Mayo";
} elseif ($mes == 6) {
    echo "Junio";
} elseif ($mes == 7) {
    echo "Julio";
} elseif ($mes == 8) {
    echo "Agosto";
} elseif ($mes == 9) {
    echo "Septiembre";
} elseif ($mes == 10) {
    echo "Octubre";
} elseif ($mes == 11) {
    echo "Noviembre";
} elseif ($mes == 12) {
    echo "Diciembre";
} else {
    echo "Número de mes inválido. Por favor ingresa un número entre 1 y 12.";
}*/
?>

<?php
/*La empresa PANDAVID requiere tener una lista para sus clientes de sus 10 primeros productos en la que se deve mostrar el precio del producto, la descripcion y las ofertas. Implimenta el programa if y else anidado*/

$producto = (int) readline("Ingresa el numero de producto (1 al 10): ");

//Usamos if y else if para determinar el nombre del mes
if ($producto == 1) {
    echo "Producto: Pan francés\n";
    echo "Cantidad disponible: 150 unidades\n";
    echo "Precio unitario: $0.25\n";
} elseif ($producto == 2) {
    echo "Producto: Pan dulce\n";
    echo "Cantidad disponible: 100 unidades\n";
    echo "Precio unitario: $0.50\n";
} elseif ($producto == 3) {
    echo "Producto: Conchas\n";
    echo "Cantidad disponible: 80 unidades\n";
    echo "Precio unitario: $0.75\n";
} elseif ($producto == 4) {
    echo "Producto: Pan integral\n";
    echo "Cantidad disponible: 60 unidades\n";
    echo "Precio unitario: $1.20\n";
} elseif ($producto == 5) {
    echo "Producto: Bolillo\n";
    echo "Cantidad disponible: 200 unidades\n";
    echo "Precio unitario: $0.30\n";
} elseif ($producto == 6) {
    echo "Producto: Cuernito\n";
    echo "Cantidad disponible: 90 unidades\n";
    echo "Precio unitario: $0.60\n";
} elseif ($producto == 7) {
    echo "Producto: Donas\n";
    echo "Cantidad disponible: 70 unidades\n";
    echo "Precio unitario: $0.80\n";
} elseif ($producto == 8) {
    echo "Producto: Pan de caja\n";
    echo "Cantidad disponible: 40 unidades\n";
    echo "Precio unitario: $2.50\n";
} elseif ($producto == 9) {
    echo "Producto: Empanadas\n";
    echo "Cantidad disponible: 50 unidades\n";
    echo "Precio unitario: $1.00\n";
} elseif ($producto == 10) {
    echo "Producto: Pan de elote\n";
    echo "Cantidad disponible: 30 unidades\n";
    echo "Precio unitario: $1.50\n";
} else {
    echo "Número de producto inválido. Por favor ingresa un número entre 1 y 10.";
}
?>