<?php
if (isset($_POST['generar_pdf'])) {
    require('fpdf184/fpdf.php');

    class PDF extends FPDF
    {
        function Header()
        {
            $this->SetFont('Arial', 'B', 12);
            $this->Cell(0, 10, 'Inscripcion a Materias', 0, 1, 'C');
        }
    }

    $pdf = new PDF();
    $pdf->AddPage();

    $email = $_POST['email'];
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 10, "Correo electronico: " . $email, 0, 1);

    $tableRows = [];
    $materiasProcesadas = [];
    $colors = [
        'PRIMER AÑO' => [0, 0, 255],
        'SEGUNDO AÑO' => [0, 255, 0],
        'TERCER AÑO' => [255, 0, 0]
    ];
    $separationColor = [200, 200, 200];
    $years = ['PRIMER AÑO', 'SEGUNDO AÑO', 'TERCER AÑO'];

    foreach ($years as $year) {
        $yearKey = strtolower(str_replace(' ', '_', $year));
        if (isset($_POST[$yearKey])) {
            if (!empty($tableRows)) {
                $tableRows[] = ['', '', $separationColor];
            }
            $tableRows[] = [$year, '', $colors[$year]];

            foreach ($_POST[$yearKey] as $materia) {
                if (!in_array($materia, $materiasProcesadas)) {
                    $tableRows[] = [$materia, ''];
                    $materiasProcesadas[] = $materia;
                }
            }
        }
    }

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(90, 10, 'Materia', 1, 0, 'C', true);
    $pdf->Cell(90, 10, 'Tipo de Inscripcion', 1, 1, 'C', true);

    $pdf->SetFont('Arial', '', 12);
    foreach ($tableRows as $row) {
        if (isset($row[2])) {
            $pdf->SetFillColor($row[2][0], $row[2][1], $row[2][2]);
        } else {
            $pdf->SetFillColor(255, 255, 255);
        }
        $pdf->Cell(90, 10, $row[0], 1, 0, 'C', true);
        $pdf->Cell(90, 10, $row[1], 1, 1, 'C', true);
    }

    $pdf->Output('D', 'inscripcion.pdf');
    exit;
}
?>
