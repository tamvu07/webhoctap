<?php

set_include_path(get_include_path() . PATH_SEPARATOR . "/path/to/dompdf");
/*require_once ('dompdf_config.inc.php');*/
require_once ("../dompdf/dompdf_config.inc.php");
/*use Dompdf\Dompdf;*/
$dompdf = new DOMPDF();
/*$html = <<<'ENDHTML'

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <p> hello4 </p>
</body>
</html>

ENDHTML;*/
/*$dompdf->load_html('<h1>xin chao this is my first HTML to PDF file</h1>');

$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream("helo.pdf");*/
 $tam = '
<h1>xin chao this is my first HTML to PDF file</h1>
<h1>xin chao this is my first HTML to PDF file</h1>
 ';
$dompdf->load_html($tam);
/*$dompdf->setPaper('A4','landspace');*/
$dompdf->render();
$dompdf->stream('codexworld',array('Attachment'=>0));
?>