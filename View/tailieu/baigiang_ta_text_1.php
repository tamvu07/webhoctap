<?php
session_start();
set_include_path(get_include_path() . PATH_SEPARATOR . "/path/to/dompdf");
require_once ("../../dompdf/dompdf_config.inc.php");
$dompdf = new DOMPDF();
if(isset($_SESSION['baigiang']) && !empty($_SESSION['baigiang']))
{
	$a = $_SESSION['baigiang'];
	
	unset($_SESSION['baigiang']);
	
}


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
'.$a.'
</body>
</html>
';
 
$dompdf->load_html($tam2);

$dompdf->render();

$dompdf->stream("cau dieu kien.pdf");




?>
