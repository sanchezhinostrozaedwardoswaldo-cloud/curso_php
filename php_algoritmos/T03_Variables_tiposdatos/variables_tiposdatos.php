<?php
    $edad = 25; // Variables de tipo entero
    $precio = 19.99; //Variable de tipo flotante
    $nombre = "Juan"; //Variable de tipo cadena
    $es_estudiante = true; //Variable de tipo booleano
    $nada = null; //Variable de tipo null

    $colores = array("rojo","verde","azul");// Variables de tipo array
    $dias = ["Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo"];
    
    //Declaración de un varible tipo objeto
    class persona {
        public $nombre;
        public $edad;
    }

    $persona = new persona(); //Objeto de la clase persona 
        $persona -> nombre = "Pedro";
        $persona -> edad = 30;
    
    //Mostrar los valores de la variable
    echo "Edad: " . $edad . "<br>";
    echo "Precio: " . $precio . "<br>";
    echo "Nombre: " . $nombre . "<br>";
    echo "Es estudiante: " . ($es_estudiante ? 'Si' : 'No' ). "<br>";
    echo "Colores: " . implode(", ", $colores) . "<br>";
    echo "Dias de la semana: " . implode(", ", $dias) . "<br>";

    echo "Persona: " .  $persona->nombre . ", Edad - " . $persona->edad . "<br>";
    echo "Nada: " . var_export($nada, true) . "<br>";
?>