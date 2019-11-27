<?php

// get the HTML
ob_start();
include(dirname(__FILE__).'/pdf/reporte.php');
$content = ob_get_clean();

// convert to PDF
require_once(dirname(__FILE__).'/../plugins/html2pdf/html2pdf.class.php');
try
{
    $html2pdf = new HTML2PDF('P', 'letter', 'fr');
    $html2pdf->pdf->SetDisplayMode('fullpage');
    $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
    $html2pdf->Output('Lista-Especialidades.pdf');
}
catch(HTML2PDF_exception $e) {
    echo $e;
    exit;
}
