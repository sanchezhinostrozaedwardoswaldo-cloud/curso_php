<?php
/*La ama de casa va al supermercado y compra 6 productos: A, B, C, D, E y F.
Cada producto tiene un precio determinado que ella debe ingresar en el sistema.
El programa debe:
1. Pedir el precio de cada producto.
2. Calcular el total a pagar.
3. Mostrar en pantalla cada producto con su repectivo precio.
4. Comparar el total con su presupuesto de S/ 1000.00 y calcular, cúanto dinero le sobra después de la compra.*/

/* Declarar variables*/
$presupuesto = 1000;

/*Ingresar los precios por teclado */
echo "Ingresa el precio del producto A: ";
$A = (float) readline();

echo "Ingresa el precio del producto B: ";
$B = (float) readline();

echo "Ingresa el precio del producto C: ";
$C = (float) readline();

echo "Ingresa el precio del producto D: ";
$D = (float) readline();

echo "Ingresa el precio del producto E: ";
$E = (float) readline();

echo "Ingresa el precio del producto F: ";
$F = (float) readline();

/*Calcular la suma de los precios*/
$sumaPrecios = $A + $B + $C + $D + $E + $F;

/*Calcular el dinero sobrante*/
$sobrante = $presupuesto - $sumaPrecios;

/* Mostrar el resultado final*/

echo "\n===============================\n";
echo "    BOLETA DE COMPRA\n";
echo "===============================\n";
echo "Producto A: S/ $A\n"; 
echo "Producto B: S/ $B\n";
echo "Producto C: S/ $C\n";
echo "Producto D: S/ $D\n"; 
echo "Producto E: S/ $E\n";
echo "Producto F: S/ $F\n";
echo "-------------------------------\n";
echo "Total a pagar: S/ $sumaPrecios\n";
echo "Presupuesto: S/ $presupuesto\n";
echo "-------------------------------\n";

/*Validar si hay dinero sobrante o faltante*/
if($sobrante >= 0){
    echo "Compra realizada con exito.";
    echo " El dinero sobrante es: $sobrante";
}else{
    $faltante = $sumaPrecios - $presupuesto;
    echo "¡Atención se paso del presupuesto en: $faltante!\n";
}


?>