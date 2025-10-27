<?php
$frutas = ["Manzana","Naranja","Platano"];

foreach ($frutas as $fruta){
    echo "Fruta: $fruta \n";
}
?>

<?php
$frutas = ["Manzana","Banana","Cereza","Durazno","Uva"];
foreach ($frutas as $fruta){
    echo "Fruta: $fruta \n";
}
?>

<?php
//Ejemplo 2: Iterar sobre un arreglo indexado
//Definimos un arreglo indexado de colores
$colores = array("Rojo", "Verde", "Azul", "Amarillo");

//Usamos foreach para iterar sobre el arreglo
foreach ($colores as $color) {
    echo "Color: $color \n";
}
?>

<?php
//Ejemplo 3: Iterar sobre un arreglo asociativo
//Definimos un arreglo asociativo

$persona = array(
    "nombre" => "Juan",
    "apellido" => "Pérez",
    "edad" => 30
);

//Usemos foreach para iterar sobre el arreglo asociativo
foreach ($persona as $clave => $valor) {
    echo "$clave: $valor \n";
}
?>
<?php
/*Crear un arrego asociativo de nombre productos: debe tener codigo, descripcion, precio, cantidad y la fecha*/
$productos = array(
    "codigo" => "P001",
    "descripcion" => "Laptop",
    "precio" => 1500,
    "cantidad" => 10,
    "fecha" => "2024-06-15"
);

foreach ($productos as $clave => $valor){
    echo "$clave: $valor \n";   
}
echo $productos["precio"];
?>