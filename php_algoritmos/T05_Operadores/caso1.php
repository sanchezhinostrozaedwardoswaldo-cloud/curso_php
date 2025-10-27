<?php
    /* Elabora un programa  que permita determinar el salario de un empleado considerando las horas trabajadas y el monto que gana por hora imprimir el total a pagar*/
    //Entrada de datos
    /*$horas = (float) readline("Ingresa las horas trabajadas: ");
    $monto = (float) readline("Ingrese el monto que gana por hora: ");

    // Proceso
    $resultado = $horas * $monto;

    //Salida de datos
    echo "\n===== REPORTE DE SALARIO =====\n";
    echo "Horas trabajadas: $horas\n";
    echo "Pago por hora: $monto\n";
    echo "El total a pagar: S/. " . number_format($resultado,2) . "\n";*/

    /*Pago total de empleados en un año
    Enunciado: La empresa necesita saber el monto total que deve pagar a sus 2 empleados despues de haber trabajado todo el año. El empledo A gana 2500 por mes el empleado B 3000 por mes. Cada empleado recibe un beneficio extra en Julio y Diciembre de 350. Se pide determinar: 
    1.- ¿Cuanto se le deve pagar al empleado A en todo el año?
    2.- ¿Cuanto se le deve pagar al empleado B en todo el año?
    3.- ¿Cuanto en total a pagado la empresa a sus empleados?*/

    $A = 2500;
    $B = 3000;
    $meses = 12;
    $beneficioJulio = 350;
    $beneficioDiciembre = 350;
    $beneficioExtra = $beneficioJulio + $beneficioDiciembre;

    $totalA = ($A * $meses) + $beneficioExtra;
    $totalB = ($B * $meses) + $beneficioExtra;

    $totalEmpleados = $totalA + $totalB;

    echo "==============================================\n";
    echo "              REPORTE DE BOLETA ANUAL         \n";
    echo "==============================================\n";
    echo "                 DATOS GENERALES              \n";
    echo "----------------------------------------------\n";
    echo "Empleado A:\n";
    echo "  - Sueldo mensual: S/ $A\n";
    echo "  - Meses trabajados: $meses\n";
    echo "  - Beneficio Julio: S/ $beneficioJulio\n";
    echo "  - Beneficio Diciembre: S/ $beneficioDiciembre\n";
    echo "  - Total anual recibido: S/ $totalA\n";
    echo "----------------------------------------------\n";
    echo "Empleado B:\n";
    echo "  - Sueldo mensual: S/ $B\n";
    echo "  - Meses trabajados: $meses\n";
    echo "  - Beneficio Julio: S/ $beneficioJulio\n";
    echo "  - Beneficio Diciembre: S/ $beneficioDiciembre\n";
    echo "  - Total anual recibido: S/ $totalB\n";
    echo "----------------------------------------------\n";
    echo "RESUMEN EMPRESA:\n";
    echo "  - Total pagado a empleados: S/ $totalEmpleados\n";
    echo "==============================================\n";
    echo "        REPORTE GENERADO CORRECTAMENTE        \n";
    echo "==============================================\n";
?>