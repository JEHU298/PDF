
	
    <?php
    require_once('pdf/fpdf.php');
    ?>
    <?php
    if (isset($_GET['escaneo'])) {
    $VarEscaneo = $_GET['escaneo'];
   // $Varcurp  = "porción1 porción2 porción3 porción4 porción5 porción6";
    $fragmentar = explode("|", $VarEscaneo);
    $Varcurp = $fragmentar[0]; // curp
    $VarApellidoPaterno =  $fragmentar[2]; // Apellido paterno 
    $VarApellidoMaterno = $fragmentar[3]; // Apellido materno
    $VarNombre = $fragmentar[4]; // Nombres 
    $VarGenero = $fragmentar[5]; // Genero
    $VarDate = $fragmentar[6]; // Fecha de nacimiento  
    $VarEntidad = $fragmentar[7]; // Entidad de nacimiento */


    }

    ?>

<?php
$pdf = new FPDF('P','mm','Letter');
    $pdf->SetTitle('FORMATO VACUNA');
    $pdf->SetTopMargin(0);
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 9);
    $BORDES = 0;
    
    $pdf->Cell(50,20, $pdf->Image('IMAGE/formatoVacuna.png',0,0,220),$BORDES);
     $pdf->SetXY(10, 65);
    $pdf->Cell(70, 10, utf8_decode($Varcurp), $BORDES, 'L');
     $pdf->SetXY(95, 50);
    $pdf->Cell(70, 10,utf8_decode($VarApellidoPaterno), $BORDES, 'C');
     $pdf->SetXY(150, 50);
    $pdf->Cell(70, 10, utf8_decode($VarApellidoMaterno), $BORDES, 'C');
     $pdf->SetXY(10, 50);
    $pdf->Cell(70, 10, utf8_decode($VarNombre), $BORDES, 'L');
     $pdf->SetXY(10, 205);
    $pdf->Cell(70, 10, utf8_decode($Varcurp), $BORDES, 'L');
     $pdf->SetXY(95, 190);
    $pdf->Cell(70, 10,utf8_decode($VarApellidoPaterno), $BORDES, 'C');
     $pdf->SetXY(150, 190);
    $pdf->Cell(70, 10, utf8_decode($VarApellidoMaterno), $BORDES, 'C');
     $pdf->SetXY(10, 190);
    $pdf->Cell(70, 10, utf8_decode($VarNombre), $BORDES, 'L');
        if ($VarGenero == "HOMBRE"){
            $pdf->SetXY(150, 190);
            $pdf->Cell(5, 5, utf8_decode("x"), $BORDES, 'C');
        }else if ($VarGenero == "MUJER"){
            $pdf->SetXY(140, 215);
            $pdf->Cell(5, 5, utf8_decode("x"), $BORDES, 'C');
        }
    /* $pdf->SetXY(20, 100);
    $pdf->Cell(70, 10, utf8_decode($VarGenero), $BORDES, 'C');
     $pdf->SetXY(20, 100);
    $pdf->Cell(70, 10, utf8_decode($VarDate), $BORDES, 'C');
     $pdf->SetXY(180, 95);
    $pdf->Cell(70, 10, utf8_decode($VarEntidad), $BORDES, 'C');*/
    /*$pdf->Cell(50,20, $Varcurp,16,7,22),$BORDES);
    $pdf->SetXY(20, 100);
    $pdf->Cell(50,20, $VarApellidoPaterno,16,7,22),$BORDES);
    $pdf->SetXY(20, 100);
    $pdf->Cell(50,20, $VarApellidoMaterno,16,7,22),$BORDES);
    $pdf->SetXY(20, 100);
    $pdf->Cell(50,20, $VarNombre,16,7,22),$BORDES);
    $pdf->SetXY(20, 100);
    $pdf->Cell(50,20, $VarGenero,16,7,22),$BORDES);
    $pdf->SetXY(20, 100);
    $pdf->Cell(50,20, $VarDate,16,7,22),$BORDES);
    $pdf->SetXY(20, 100);
    $pdf->Cell(50,20, $VarEntidad,16,7,22),$BORDES);*/
    //$pdf->SetXY(20, 100);

   // $Suspension = "HOLA MUND0";
    //$pdf->MultiCell(100, 3,  $Suspension, 0, 'C'); 

    //$pdf->SetXY(20, 200);
    //$pdf->MultiCell(120, 3, utf8_decode('SUBSECRETARIA DEL TRANSPORTE'), $BORDES, 'C');
    //$pdf->MultiCell(26, 3, 'FEDERAL  ___________                              ESTATAL ___________', 0, 'L'); //


    //$pdf->AddPage();

    $pdf->Output();

?>
