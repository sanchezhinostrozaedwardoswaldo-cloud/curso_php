<?php
$persona = array (
    array("nombre" => "Juan", "edad" => 25),
    array("nombre" => "Ana", "edad" => 30)
);

foreach ($persona as $personas){
    if($personas["nombre"] == "Ana"){
        // muestra "Persona encontrada: Ana"
        echo "Ejemplo 1: Persona encontrada: " . $personas["nombre"] . "\n";
    }
}
?>