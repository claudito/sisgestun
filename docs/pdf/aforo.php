<?php 

include'../../vendor/autoload.php';
include'../../autoload.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

# Contenido HTML del documento que queremos generar en PDF.
ob_start();
include('consulta/aforo.php');
$html=ob_get_clean();
$dompdf = new Dompdf();
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
//$dompdf->setPaper('A4', 'letter');
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf ->stream('Aforo.pdf',array('Attachment'=>0));#Previzualizar




 ?>