

<?php
$fpath = "t1.txt";
$fopen = fopen($fpath,"rb");
header("Content-Type:application/octet-stream");
header("Content-Length:".filesize($fpath));
$fread = fpassthru($fopen);
header("Content-Disposition:attachment; filename=".$fpath);
fclose($fopen);
?>
