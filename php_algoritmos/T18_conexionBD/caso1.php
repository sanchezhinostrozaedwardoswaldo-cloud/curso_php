<?php
$host="localhost";//o la IP del servidor de base de datos
$usuario="root";// o el usuario de la base de datos
$password="29oswaldo2006"; //o la contraseña del ususario
$baseDeDatos="institucion_educativa"; // o el nombre de la base de datos

try {
    //Crear la conexión
    $conn = new PDO("mysql:host=$host;dbname=$baseDeDatos", $usuario, $password);
    //Configurar el modo de error de PDO a excepción
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<h3>Conexión a la base de datos exitosa.</h3><br>";

    //Preparar y ejecutar la consulta SQL
    $sql = "SELECT e.nombres, e.apellidos, e.email, e.telefono, e.numero_documento, e.fecha_ingreso, c.nombre_carrera
            FROM estudiantes e, carreras c
            WHERE e.id_estudiante = c.id_carrera";

    $stmt = $conn->prepare($sql);
    $stmt->execute();

    //Verificar si hay resultados
    if ($stmt->rowCount() > 0) {
        //Mostrar los resultados en una tabla HTML
        echo "<h3>Lista de Estudiantes</h3>";
        echo "<table border='1' cellpadding='8' cellspacing='0'>
                <tr style='background-color: #f2f2f2;'>
                    <th>NOMBRES</th>
                    <th>APELLIDOS</th>
                    <th>EMAIL</th>
                    <th>TELEFONO</th>
                    <th>DNI</th>
                    <th>INGRESO</th>
                    <th>CARRERA</th>
                </tr>";
        //Recorrer los resultados
        while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
                    <td>" . $fila['nombres'] . "</td>
                    <td>" . $fila['apellidos'] . "</td>
                    <td>" . $fila['email'] . "</td>
                    <td>" . $fila['telefono'] . "</td>
                    <td>" . $fila['numero_documento'] . "</td>
                    <td>" . $fila['fecha_ingreso'] . "</td>
                    <td>" . $fila['nombre_carrera'] . "</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "No se encontraron registros en la tabla estudiante.";
    }

} catch (PDOException $e) {
    echo "Error de la conexión. " . $e->getMessage();
}

?>