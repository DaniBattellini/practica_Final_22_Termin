<?php

include('primero.php');
include('header_pagina.php');
include('footer.php');

?>

<?php
require('fpdf/fpdf.php');

class PDF extends FPDF {
  function Header() {
    // Encabezado del PDF
  }

  function Footer() {
    // Pie de página del PDF
  }

  function CreateTableHeader() {
    // Crea el encabezado de la tabla
  }

  function CreateTableRow($data) {
    // Crea una fila de la tabla con los datos enviados
  }
}

$pdf = new PDF();
$pdf->AddPage();

// Crear el encabezado de la tabla
$pdf->CreateTableHeader();

// Obtener los datos del formulario y crear filas de la tabla
$data = array(
  $_POST['materia1'],
  $_POST['materia2'],
  $_POST['materia3'],
  $_POST['materia4'],
);

for ($i = 0; $i < count($data); $i++) {
  $pdf->CreateTableRow($data[$i]);
}

$pdf->Output();

?>
