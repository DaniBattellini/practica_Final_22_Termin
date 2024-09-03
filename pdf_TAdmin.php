
<?php
// Datos de ejemplo para la tabla
$datos = array(
    array('Materia 1', 'Condición 1'),
    array('Materia 2', 'Condición 2'),
    array('Materia 3', 'Condición 3')
);

// Nombre del archivo de descarga
$nombreArchivo = 'formulario_condicion_materias.csv';

// Headers para la descarga
header('Content-Type: application/csv');
header('Content-Disposition: attachment; filename="' . $nombreArchivo . '";');

// Crear un recurso de archivo temporal
$tempArchivo = fopen('php://temp', 'w');

// Escribir los datos en el archivo temporal
foreach ($datos as $fila) {
    fputcsv($tempArchivo, $fila);
}

// Rebobinar el archivo temporal para comenzar a leer desde el principio
rewind($tempArchivo);

// Leer el contenido del archivo temporal y enviarlo al navegador
fpassthru($tempArchivo);

// Cerrar y eliminar el archivo temporal
fclose($tempArchivo);

?>

<script src="http://cdnjs.cloudflare.com/ajax/bib/jspdf/2.5.1/jspdf.umd.min.js"></script> 

<script src="http:unpkg.com/jspdf@latest/dist/jspdf.umd.min.js"></script>

