<?php
$host="localhost";//o la IP del servidor de base de datos
$usuario="root";// o el usuario de la base de datos
$password=""; //o la contraseña del ususario
$baseDeDatos="gestion_empleados"; // o el nombre de la base de datos

try {
    //Crear la conexión
    $conn = new PDO("mysql:host=$host;dbname=$baseDeDatos", $usuario, $password);
    //Configurar el modo de error de PDO a excepción
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<h3>Conexión a la base de datos exitosa.</h3><br>";

    //Preparar y ejecutar la consulta SQL
    $sql = "select p.idempleado,p.dni, p.nombres, p.apellidos, p.direccion,p.telefono,c.nombrecargo
            from empleado p, cargo c
            where c.id = p.cargo_id";

    $stmt = $conn->prepare($sql);
    $stmt->execute();

    //Verificar si hay resultados
    if ($stmt->rowCount() > 0) {
        //Mostrar los resultados en una tabla HTML
        echo "<h3>Lista de Empleados</h3>";
        echo "<table border='1' cellpadding='8' cellspacing='0'>
                <tr style='background-color: #f2f2f2;'>
                    <th>ID Empleado</th>
                    <th>DNI</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Cargo</th>
                </tr>";
        //Recorrer los resultados
        while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
                    <td>" . $fila['idempleado'] . "</td>
                    <td>" . $fila['dni'] . "</td>
                    <td>" . $fila['nombres'] . "</td>
                    <td>" . $fila['apellidos'] . "</td>
                    <td>" . $fila['direccion'] . "</td>
                    <td>" . $fila['telefono'] . "</td>
                    <td>" . $fila['nombrecargo'] . "</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "No se encontraron registros en la tabla cliente.";
    }

} catch (PDOException $e) {
    echo "Error de la conexión. " . $e->getMessage();
}

?>