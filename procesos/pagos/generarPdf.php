<?php

 //Agregamos la libreria FPDF
 require('../../fpdf/fpdf.php');
 require_once"../../clases/Conexion.php";
$id_cliente = $_GET['id_cliente'];
$id_pago = $_GET['id_pago'];
$c=new conectar();
$dbh = $c->conexion();
$stmt=$dbh->prepare("SELECT * FROM clientes c, pagos p where c.id_cliente=:id_cliente and p.id_pago=:id_pago");
$stmt->bindValue(':id_cliente',$id_cliente, PDO::PARAM_INT);
$stmt->bindValue(':id_pago',$id_pago, PDO::PARAM_INT);
$stmt->execute();
$pago = $stmt->fetch();

$pago['denominacion'] =utf8_decode( $pago['denominacion']);

$pdf = new FPDF(); //Creamos un objeto de la librería
$pdf->AddPage();

$pdf->SetFont('Arial','B',15);
$pdf->MultiCell(190,40, $pdf->Image('../../img/gbas.png', $pdf->GetX()+50, $pdf->GetY()+3, 100) ,0,"C");

$pdf->SetFont('Arial','B',15);
$pdf->SetFillColor(150, 168, 255);
$pdf->Cell(0,10,$pago['denominacion'],1,2,'C',True);
$pdf->Ln(10);
$pdf->SetFont('Arial','',12);
$fecha = date('d-m-Y');

$pdf->Cell(0,10,utf8_decode($fecha),0,2,'R');
$pdf->Ln(5);
$pdf->Cell(0,10,utf8_decode('Fecha de liquidación: '.$pago['fecha']),0,2,'L');
$pdf->Ln(7);
$pdf->SetFont('Arial','U',12);
$pdf->Cell(0,10,utf8_decode('LIQUIDACION MENSUAL:'),0,2,'L');
$tabc = '                                ';
$tab = '                                                                    ';

$total = 0;

//ATER, MUNICIPALIDAD, EMPLEADOR, SINDICATO, SICORE Y GANANCIAS.

		if($pago['monotributo']>0){
		$total = $total+$pago['monotributo'];
		$pdf->Ln(3);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(0,10,utf8_decode($tabc.'Monotributo:'."   $".$pago['monotributo']),0,2,'L');
		}

		if($pago['iva']>0){
		$total = $total+$pago['iva'];
		$pdf->Ln(3);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(0,10,utf8_decode($tabc.'IVA: '."$".$pago['iva']),0,2,'L');
		}

		if($pago['autonomo']>0){
		$total = $total+$pago['autonomo'];
		$pdf->Ln(3);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(0,10,utf8_decode($tabc.'Autonomo: '."$".$pago['autonomo']),0,2,'L');
		}

		if($pago['ater']>0){
		$total = $total+$pago['ater'];
		$pdf->Ln(3);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(0,10,utf8_decode($tabc.'Ater: '."$".$pago['ater']),0,2,'L');
		}

		if($pago['municipalidad']>0){
		$total = $total+$pago['municipalidad'];
		$pdf->Ln(3);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(0,10,utf8_decode($tabc.'Municipalidad: '."$".$pago['municipalidad']),0,2,'L');
		}

		if($pago['empleador']>0){
		$total = $total+$pago['empleador'];
		$pdf->Ln(3);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(0,10,utf8_decode($tabc.'Empleador: '."$".$pago['empleador']),0,2,'L');
		}

			if($pago['sindicato']>0){
		$total = $total+$pago['sindicato'];
		$pdf->Ln(3);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(0,10,utf8_decode($tabc.'Sindicato: '."$".$pago['sindicato']),0,2,'L');
		}

			if($pago['sicore']>0){
		$total = $total+$pago['sicore'];
		$pdf->Ln(3);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(0,10,utf8_decode($tabc.'Sicore: '."$".$pago['sicore']),0,2,'L');
		}

			if($pago['ganancias']>0){
		$total = $total+$pago['ganancias'];
		$pdf->Ln(3);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(0,10,utf8_decode($tabc.'Ganancias: '."$".$pago['ganancias']),0,2,'L');
		}



		if($pago['caja']>0){
		$total = $total+$pago['caja'];
		$pdf->Ln(3);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(0,10,utf8_decode($tabc.'Caja: '."$".$pago['caja']),0,2,'L');
		}

		if($pago['aportes']>0){
		$total = $total+$pago['aportes'];	
		$pdf->Ln(3);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(0,10,utf8_decode($tabc.'Aportes:  '."$".$pago['aportes']),0,2,'L');
		}

		if($pago['cpceer']>0){
		$total = $total+$pago['cpceer'];	
		$pdf->Ln(3);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(0,10,utf8_decode($tabc.'Cpceer:  '."$".$pago['cpceer']),0,2,'L');
		}

		if($pago['matricula']>0){
		$total = $total+$pago['matricula'];	
		$pdf->Ln(3);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(0,10,utf8_decode($tabc.'Matricula;  '."$".$pago['matricula']),0,2,'L');
		}

		if($pago['suss']>0){
		$total = $total+$pago['suss'];	
		$pdf->Ln(3);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(0,10,utf8_decode($tabc.'Suss:  '."$".$pago['suss']),0,2,'L');
		}

		if($pago['ley4035']>0){
		$total = $total+$pago['ley4035'];	
		$pdf->Ln(3);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(0,10,utf8_decode($tabc.'Ley 4035:  '."$".$pago['ley4035']),0,2,'L');
		}

		if($pago['honorarios']>0){
		$total = $total+$pago['honorarios'];	
		$pdf->Ln(3);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(0,10,utf8_decode($tabc.'Honorarios:  '."$".$pago['honorarios']),0,2,'L');
		}










$pdf->Ln(3);
$pdf->Cell(0,10,utf8_decode($tabc.'TOTAL: '.$tab."$".$total),1,2,'L');

$pdf->Output();
echo ("1");
?>