<?php
$color = readline("Elige un color: ");
switch ($color) {
    case "rojo":
        echo "El color es rojo";
        break;
    case "azul":
        echo "El color es azul";
        break;
    case "verde":
        echo "El color es verde";
        break;
    default:
        echo "Color no reconocido";
        break;
}
?>
