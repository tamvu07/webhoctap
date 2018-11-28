   <?php 
session_start();
require_once("header_teacher.php");
  require_once("../Controller/controller_dangbai.php"); 
$t = new controller_dangbai();
$monhoc =  $_REQUEST['monhoc'];
?>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <div class="main-container container" id="main-container" style="    background-color: #fff; ">

      <div class="container">
      <form method="post" enctype="multipart/form-data">

          <textarea class="ckeditor" name="editor">
          </textarea>  
          <input type="submit" name="submit" value="ĐĂNG BÀI" class="btn btn-primary btn-block">
      </form>
  <?php
if(isset($_POST['submit']))
{
  if(isset($_POST['editor']) && !empty($_POST['editor']))
  {
    $content = $_POST['editor'];
  }else{
      echo '
          <script type="text/javascript">
            alert("hay dien du lieu !");
          </script>
      ';
  }

  if(isset($content) && !empty($content))
  {
    $t->insert_text($content,$monhoc);
  } 

}
  ?>     

   

<?php
/*    function parseWord($userDoc) 
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
          <a  href="View/montienganh_gv.php?monhoc=<?php 
                  echo $monhoc ?> ">
                 <button  type="submit" name="thoat"   class="btn btn-primary btn-block" style="width: 100%" >THOÁT</button> 
               </a>
      </div>
     </div>
     
<?php require_once("footer.php");?>
