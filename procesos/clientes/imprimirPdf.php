<?php 
require_once'dompdf/autoload.inc.php';

use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();


$html = file_get_contents("http://localhost/gines%202/vistas/clientes.php"); 
// (Optional) Setup the paper size and orientation
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();
 ?>