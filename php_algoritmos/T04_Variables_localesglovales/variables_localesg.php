<?php
    //Variables locales
    function saludar(){
        $mensaje = "Hola soy una variable local.<br>";
        echo $mensaje;
    }
    saludar();
    //echo $mensaje; // Esto genera un error porque $mensajes es una variable local
?>

<?php
    //Variables globales
    $saludo = "Hola soy una variable global. <br>";

    function MostrarSaludo(){
        global $saludo; //Declarar la variable global dentro de la función
        echo $saludo;
    }

    MostrarSaludo();
?>

<?php
    //Otro ejemplo de variable global: Realizar la multiplicación de dos numeros, y las demas operaciones
    $num1 = 10;
    $num2 = 10;

    function operaciones(){
        global $num1 , $num2;
        $multiplicacion = $num1 * $num2;
        echo "---------------------------------------------------<br>";
        echo "La multiplicación de " .$num1 . " * ". $num2 . " es: " .$multiplicacion . "<br>";
        $suma = $num1 + $num2;
        echo "La suma de " .$num1 . " + ". $num2 . " es: " . $suma . "<br>";
        $resta = $num1 - $num2;
        echo "La resta de " .$num1 . " - ". $num2 . " es: " . $resta . "<br>";
        $division = $num1 / $num2;
        echo "La división de " .$num1 . " / ". $num2 . " es: " . $division . "<br>";
    }

    operaciones();

?>