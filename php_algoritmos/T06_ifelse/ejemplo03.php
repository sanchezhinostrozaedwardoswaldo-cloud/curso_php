<?php
$nombreAlumno =readline("Ingresa tu nombre: ");
$nombreCurso = readline("Ingresa el nombre del curso: ");

echo "\n---------------Ingresa tus 4 notas----------------\n";

$nota1 = readline("Nota 1: ");
$nota2 = readline("Nota 2: ");
$nota3 = readline("Nota 3: ");
$nota4 = readline("Nota 4: ");

$promedio = ($nota1 + $nota2 + $nota3 + $nota4 )/4;

echo "\n======RESULTADO FINAL=======\n";
echo "Alumno: $nombreAlumno\n";
echo "Curso: $nombreCurso\n";
echo "Promedio final: " . number_format($promedio, 2) ."\n";

if($promedio > 10){
    echo "\n---------------estas aprobado--------------------";
}else{
    echo "\n---------------estas desaprobado-------------------";
}
?>
