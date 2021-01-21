<?php
require_once '../../../models/Database.php';
require_once '../../../models/modeloUsuario.php';
require_once './fpdf182/fpdf.php';

$db = new Database();
$db->StartUp();



class PDF extends FPDF
{
    function LoadData()
    {
        $usuario = new modeloUsuario();
        foreach ($usuario->Listar() as $r) {
            $data[] = array($r->user_id, $r->name, $r->email);
        }
        //print_r($data);
        return $data;
    }
    function header()
    {
        $this->Image('bannerITS.jpg', 10, 6);
        $this->SetFont('Arial', 'B', 14);
        $this->Cell(260, 50, 'Registro de usuarios', 0, 0, 'C');
        $this->Ln();
        $this->SetFont('Arial', '', 12);
        $this->Ln(20);
    }
    function footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', '', 8);
        $this->Cell(0, 0, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
    function FancyTable($header, $data)
    {
        //cuerpo del reporte
        //define absissa (x) and ordinate (y)
        $this->SetXY(50, 50);
        $this->SetFont('Arial', 'B', 10);


        // Header
        $this->SetFillColor(230, 230, 230);
        $w = array(10, 80);
        for ($i = 0; $i < count($header); $i++)
            $this->Cell($w[$i], 6, $header[$i], 1, 0, 'C', true);
        $this->Ln();
        // Color and font restoration
        //setFillColor(fill collor operation)

        //SetTextColor define color text
        $this->SetTextColor(0);
        $this->SetFont('');
        $fill = false;

        $noLinea    = 1;
        $c          = 1;
        //data
        $this->SetXY(50, 56);
        foreach ($data as $row) {
            $this->Cell($w[0], 4, $row[0], 1, 0, 'C', false);
            $this->Cell($w[1], 4, $row[1], 1, 0, 'C', false);
            $this->Cell($w[2], 4, $row[2], 1, 0, 'C', false);
            $this->Ln(4);
            $this->SetX(50);

            $fill = !$fill;

            if ($c >= 37) {
                $this->setAutoPagebreak(true, '40');
                $this->Cell(array_sum($w), 0, '', 'T');

                // Header
                $this->SetXY(50, 50);
                $w = array(10, 80);
                for ($i = 0; $i < count($header); $i++)
                    $this->Cell($w[$i], 6, $header[$i], 1, 0, 'C', true);
                $this->Ln();
                $c = 1;
            }
        }
    }
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('L', 'A4', 0);
$header  = array('Clave', 'Nombre', 'Email');
$data = $pdf->LoadData();
$pdf->FancyTable($header, $data);
$pdf->SetAutoPageBreak(true, 20);
$pdf->Output();