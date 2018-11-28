<?php
set_include_path(get_include_path() . PATH_SEPARATOR . "/path/to/dompdf");
require_once ("../../dompdf/dompdf_config.inc.php");
$dompdf = new DOMPDF();

/*$tmp = fopen('tailieu3.txt', 'rb');
@flock($tmp, LOCK_SH);*/



 $tam = file_get_contents('tailieu4.html');

/*@flock($tmp, LOCK_UN);
fclose($tmp);*/


$tam2 = '
<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
  <title></title>
  <style>
  body { font-family: DejaVu Sans, sans-serif; }
</style>
</head>
<body>
<p>co </p>
<p>vũ minh tâm , xin chào ???2 3 4</p>


</body>
</html>
';
 
$dompdf->load_html($tam2);

$dompdf->render();

$dompdf->stream("tailieu2.pdf");




?>
