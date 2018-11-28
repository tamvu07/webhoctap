   <?php 
session_start();
require_once("header_student.php");
  require_once("../Controller/controller_dangbai.php"); 
$t = new controller_dangbai();
$monhoc =  $_REQUEST['monhoc'];
?>
<style type="text/css">
#table{
width: 780px;
}

#container_table{
  padding: 23px;
}
#noidung{
    margin: 0px auto;
    background-color: #fbf3f3;
    height: 600px;
     overflow:auto;
    text-align:left;
    padding:15px;
    border-radius:10px;
}
</style>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <div class="main-container container" id="main-container" style="    background-color: #fff; ">

      <div class="container" >
        <div align="center" id="container_table">
        <div style="width: 100%;    float: right;">
          <a href="View/tailieu/baigiang_ta_text_1.php">
             <input style=" width: 20%; float: left;" type="submit" name="submit" value="DOWNLOAD" class="btn btn-primary btn-block"> 
          </a>
          <a href="View/montienganh.php?monhoc=<?php 
                  echo $monhoc ?> ">
             <input style=" width: 20%; float: left;margin-left: 10px;" type="submit" name="submit" value="THOÁT" class="btn btn-primary btn-block"> 
          </a>
        </div>
<!--           <table class="table table-striped table-borderd" id="table">
            <tr>
              <td >
                <?php
                    $t->show_text();
                  ?> 
              </td>
            </tr>
          </table> 
        </div> -->
        <div id="noidung">
                  <?php
                    $t->show_text();
                     $_SESSION['baigiang'] = $t->get_text();
                     
                  ?>
        </div>


<?php
   /* function parseWord($userDoc) 
{
    $fileHandle = fopen($userDoc, "r");
    $line = @fread($fileHandle, filesize($userDoc));   
    $lines = explode(chr(0x0D),$line);
    $outtext = "";
    foreach($lines as $thisline)
      {
        $pos = strpos($thisline, chr(0x00));
        if (($pos !== FALSE)||(strlen($thisline)==0))
          {
          } else {
            $outtext .= $thisline." ";
          }
      }
     $outtext = preg_replace("/[^a-zA-Z0-9\s\,\.\-\n\r\t@\/\_\(\)]/","",$outtext);
    return $outtext;
} 

$userDoc = "ta1.doc";
echo parseWord($userDoc) ;*/
?>

      </div>
     </div>
     
<?php require_once("footer.php");?>
