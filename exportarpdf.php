<?php
require_once("dompdf/dompdf_config.inc.php");

$document = '.$_GET['doc'];

// alguns ajustes devido a variações de servidor para servidor
if ( get_magic_quotes_gpc() )
    $document = stripslashes($document);


// abertura de novo documento
$dompdf = new DOMPDF();

// carregar o HTML
$dompdf->load_html($document);

// dados do documento destino
$dompdf->set_paper("A4", "portrail");

// gerar documento destino
$dompdf->render();

// enviar documento destino para download
$dompdf->stream("dompdf_out.pdf");

exit(0);
?>