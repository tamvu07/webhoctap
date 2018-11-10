<?php 
  require_once("../Controller/controller_lambaithi.php"); 
$t = new controller_lambaithi();
require_once("header_teacher.php");
session_start();
$monhoc = $_GET['monhoc'];
$baithi = $_GET['baithi'];
?>



<script src="../SpryAssets/SpryValidationCheckbox.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryValidationCheckbox.css" rel="stylesheet" type="text/css" />
<div class="main-container container" id="main-container" style="    background-color: #fff; "> 
<table width="1069" border="1">
  <tr>
    <td width="121"><div align="center">MÔN HỌC</div></td>
    <td width="74"><div align="center">ĐỀ THI</div></td>
    <td width="172"><div align="center">NỘI DUNG</div></td>
    <td width="51"><div align="center">A</div></td>
    <td width="60"><div align="center">B</div></td>
    <td width="47"><div align="center">C</div></td>
    <td width="91"><div align="center">D</div></td>
    <td width="90"><div align="center">ĐÁP ÁN</div></td>
    <td width="79"><div align="center">SỬA</div></td>
    <td width="100"><div align="center">THỰC THI</div></td>
  </tr>
  <?php 
  $t->lay_ds_cauhoi(); 
  if(isset($_POST['submit']))
  {
    if(!isset($_POST['check']))
                  echo '<script language="javascript" >
                    alert("Chưa Chọn Câu Hỏi Để Sửa");
                    </script>';
    else
    {
        $mach = $_POST['check'];
        $_SESSION['ma_cau_hoi'] = $mach;
         $_SESSION['monhoc'] = $_GET['monhoc'];
          $_SESSION['baithi'] = $_GET['baithi'];
        echo '<script type="text/javascript">
              window.location = "View/sua_1_cau_hoi.php";
            </script>
            ';
/*        
        echo '<meta http-equiv="refresh" content="0" />';*/
    }
  }
  ?>

</table>
  <tr>
    <div align="center">
                 
              <br><br>
                      
                <a  href="View/montienganh_gv.php?monhoc=<?php 
                  echo $monhoc ?> ">
                 <button  type="submit" name="thoat" id="nut" value="thoat" class="btn btn-primary btn-block" style="width: 30%" >THOÁT</button> 
               </a>
            
            <br><br>
    </div>
  </tr>
</div>
<?php

/*  if(isset($_POST['thoat']))
  {
        $_SESSION['ma_cau_hoi'] = $mach;
  echo '<script type="text/javascript">
              window.location = "View/montienganh_gv.php";
            </script>
            ';
  }*/
?>
<?php require_once("footer.php");?>