<?php
    /* Operadores de comparacion*/
    /*$esIgual = ($a == $b);
    $esDistinto = ($a != $b);
    $esMayor = ($a > $b);
    $esMenor = ($a < $b);
    $esMayorIgual = ($a >= $b);
    $esMenorIgual = ($a <= $b);*/

    /* Imprimirlo */
    /*echo "Resultado de las compraciones \n";
    echo "Es igual: " . ($esIgual ? 'Si':'No') . "\n";
    echo "Es distinto: " . ($esDistinto ? 'Si':'No') . "\n";
    echo "Es mayor: " . ($esMayor ? 'Si':'No') . "\n";
    echo "Es menor: " . ($esMenor ? 'Si':'No') . "\n";
    echo "Es menor o igual: " . ($esMayorIgual ? 'Si':'No') . "\n";
    echo "Es mayor o igual: " . ($esMenorIgual ? 'Si':'No') . "\n";*/
    
    /* Evalua si los salarios de los empleados son iguales, o evalua quien de ellos a ganado mas y cual es la diferencia. El empleado A ha percibido durante el año 12500 y el empleado B 13500. Asi mismo el empleado C ha percibido 12500 y el empleado d 12500, se solicita comparar A y B para determinar quien ha ganado mas, luego comparar A y C para determinar si han ganado los mismo*/

    /*$a = 12500;
    $b = 13500;
    $c = 12500;
    $d = 12500;

    $comparacionAB = ($a > $b);
    $compracionAC = ($a == $c);

    if($comparacionAB == true){   
        echo "El empleado A gano mas que el empleado B";
    }else{
        $diferencia = $b - $a;
        echo "El empleado B gano mas que el empleado A con una diferencia de: $diferencia\n";
    }

    if($compracionAC == true){
        echo "El empleado A y C ganan lo mismo \n";
    }else{
        echo "El empleado A y C ganan diferente \n";
    }*/

    /* Operadores logicos */
    /*$yLogico = ($a > 5 && $b < 6);
    echo "Resulta AND logico: " . ($yLogico ? 'Verdadero':'Falso') . "\n";

    $oLogico = ($a > 5 || $b < 10);
    echo "Resulta OR logico: " . ($oLogico ? 'Verdadero':'Falso') . "\n";*/

    /* Operadores de asignación*/
    $c = 10;
    $c += 5;
    $c -= 3;
    $c *= 2;
    $c /= 4;

    echo "Valor final de c: " . $c . "\n";

    /*Operadores de incremento y decremento*/
    $d = 5;
    echo "d antes del incremento: " . $d . "\n";
    echo "d incremento de d (pre-incremento) " . (++$d) . "\n";
    echo "d despues del decremento: " . (--$d) . "\n";
?>