<?php
$salarios_mensual = array(2500, 2800, 3000, 3500, 3150, 1030);

//Mostrar valores individuales
echo "Mostrar los valores individuales: \n";
echo "Salario 1: " . $salarios_mensual[0] . "\n";
echo "Salario 2: " . $salarios_mensual[1] . "\n";
echo "Salario 3: " . $salarios_mensual[2] . "\n";
echo "Salario 4: " . $salarios_mensual[3] . "\n";
echo "Salario 5: " . $salarios_mensual[4] . "\n";
echo "Salario 6: " . $salarios_mensual[5] . "\n\n";

//Calcular la sumna de todos los elementos
$suma = array_sum($salarios_mensual);

//Contar cuantos elementos hay
$cantidad = count($salarios_mensual);

//Calcular promedio
$promedio = $suma / $cantidad;

//Mostrar resultados
echo "Suma,cantidad y promedio de los salarios mensuales.\n";
echo "Suma total de los salarios: " . $suma . "\n";
echo "Cantidad de elementos: " . $cantidad . "\n";
echo "Promedio: " . number_format($promedio, 2) . "\n\n";

//Mostrar los números con foreach
$i = 1;
echo "Listado de numeros: \n";
foreach ($salarios_mensual as $salarios_mensuales) {
    echo "Salario mensual $i:  ".$salarios_mensuales . "\n";
    $i++;
}
?>