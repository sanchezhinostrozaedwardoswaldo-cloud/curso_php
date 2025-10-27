<?php
/*Ejemplo 01
$personas = array (
    array("nombre" => "Juan", "edad" => 25),
    array("nombre" => "Ana", "edad" => 30),
);
echo "Ejemplo 1 : Nombre de la primera persona: " . $personas[0]["nombre"] . "\n";  */
?>

<?php
/*Ejemplo 2*/
$empleados = [
    [
        "nombre" => "Carlos",
        "cargo" => "Administrador",
        "sueldo" => 2500
    ],
    [
        "nombre" => "Maria",
        "cargo" => "Secretaria",
        "sueldo" => 1800
    ],
    [
        "nombre" => "Pedro",
        "cargo" => "Programador",
        "sueldo" => 3000
    ]
];

?>
<?php
foreach ($empleados as $empleado){
    echo "Nombre: " . $empleado["nombre"] . "\n";
    echo "Cargo: " . $empleado["cargo"] . "\n";
    echo "Sueldo: " . $empleado["sueldo"] . "\n\n";
}
?>
