<?php
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "inscripciones";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT alumnos.nombre, alumnos.apellido, alumnos.dni, alumnos.cuil, alumnos.carrera, 
               inscripciones.materia, inscripciones.condicion_cursado
        FROM alumnos
        JOIN inscripciones ON alumnos.id = inscripciones.alumno_id";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripciones a Materias</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Inscripciones a Materias</h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>DNI</th>
            <th>CUIL</th>
            <th>Carrera</th>
            <th>Materia</th>
            <th>Condición de Cursado</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["nombre"]. "</td>
                        <td>" . $row["apellido"]. "</td>
                        <td>" . $row["dni"]. "</td>
                        <td>" . $row["cuil"]. "</td>
                        <td>" . $row["carrera"]. "</td>
                        <td>" . $row["materia"]. "</td>
                        <td>" . $row["condicion_cursado"]. "</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No hay inscripciones</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>
