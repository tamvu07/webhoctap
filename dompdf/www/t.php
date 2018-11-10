<?php

/*set_include_path(get_include_path() . PATH_SEPARATOR . "/path/to/dompdf")
require_once("dompdf_config.inc.php");
$dompdf = new DOMPDF();
$html = <<<'ENDHTML';

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <p> hello </p>
</body>
</html>

ENDHTML;

$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream("helo.pdf");*/
?>