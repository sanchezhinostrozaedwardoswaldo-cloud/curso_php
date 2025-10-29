<?php
require_once "conexion.php";

$sql = "SELECT e.nombres, e.apellidos, e.email, e.telefono, e.numero_documento, e.fecha_ingreso, c.nombre_carrera
        FROM estudiantes e
        INNER JOIN carreras c ON e.id_carrera = c.id_carrera";

$stmt = $conn->prepare($sql);
$stmt->execute();
$estudiantes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Estudiantes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Lista de Estudiantes</h1>
</header>

<div class="container">
    <?php if (!empty($estudiantes)): ?>
        <table>
            <thead>
                <tr>
                    <th>NOMBRES</th>
                    <th>APELLIDOS</th>
                    <th>EMAIL</th>
                    <th>TELÉFONO</th>
                    <th>DNI</th>
                    <th>FECHA DE INGRESO</th>
                    <th>CARRERA</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($estudiantes as $fila): ?>
                    <tr>
                        <td><?= htmlspecialchars($fila['nombres']) ?></td>
                        <td><?= htmlspecialchars($fila['apellidos']) ?></td>
                        <td><?= htmlspecialchars($fila['email']) ?></td>
                        <td><?= htmlspecialchars($fila['telefono']) ?></td>
                        <td><?= htmlspecialchars($fila['numero_documento']) ?></td>
                        <td><?= htmlspecialchars($fila['fecha_ingreso']) ?></td>
                        <td><?= htmlspecialchars($fila['nombre_carrera']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="mensaje">No se encontraron registros en la base de datos.</p>
    <?php endif; ?>
</div>

</body>
</html>
