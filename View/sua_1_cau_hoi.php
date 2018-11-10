<?php 
  require_once("../Controller/controller_lambaithi.php"); 
$t = new controller_lambaithi();
session_start();
require_once("header_teacher.php");
/*$monhoc =  $_REQUEST['monhoc'];*/
$macauhoi = $_SESSION['ma_cau_hoi'];
$monhoc = $_SESSION['monhoc'];
$baithi = $_SESSION['baithi'];
$kq = $t->get_1_cau_hoi($macauhoi);
while($rows=$kq->fetch_assoc())
{
      $mamonhoc = $rows['MaMonHoc'];
      if($mamonhoc == 1){
        $mamonhoc2 = "TIENG ANH";
      }
      $madethi = $rows['MaDeThi'];
      $noidung = $rows['NoiDungCauHoi'];
      $a = $rows['A'];
      $b = $rows['B'];
      $c = $rows['C'];
      $d = $rows['D'];
      $dapan = $rows['DapAn'];
 
}
?>

<div class="main-container container" id="main-container" style="    background-color: #fff; "> 
<form method="POST">
<table width="600" border="1" align="center">
  <tr>
    <td colspan="2"><div align="center">SỬA CÂU HỎI</div></td>
  </tr>
  <tr>
    <td>Ma mon hoc</td>
    <td>
       <!-- <input type="text" name="txt_mamonhoc" id="txtA" /> -->
       <?php echo $mamonhoc2 ?>
      </td>
  </tr>
  <tr>
    <td width="291">Ma de</td>
    <td width="293">
      <!-- <input type="text" name="txt_made" id="txtA" /> -->
      <?php echo $madethi ?>
    </td>
  </tr>
  <tr>
    <td>Noi dung</td>
    <td>
    <textarea name="txt_noidung" id="txt_noidung" rows="3" >
       <?php echo $noidung ?> 
    </textarea>
  </td>
  </tr>
  <tr>
    <td>A</td>
    <td><input type="text" name="txt_A" id="txt_A" value="<?php echo $a ?>" />
    
    </td>
  </tr>
  <tr>
    <td>B</td>
    <td><input type="text" name="txt_B" id="txt_B" value="<?php echo $b ?>" />
     
    </td>
  </tr>
  <tr>
    <td>C</td>
    <td><input type="text" name="txt_C" id="txt_C" value="<?php echo $c ?>" />
      
    </td>
  </tr>
  <tr>
    <td>D</td>
    <td><input type="text" name="txt_D" id="txt_D" value="<?php echo $d ?>" />
      
    </td>
  </tr>
  <tr>
    <td>Dap an</td>
    <td><input type="text" name="txt_DapAn" id="txt_DapAn" value="<?php echo $dapan ?>" />
      
    </td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="submit" id="submit" value="Xong" />
      <!-- <input type="submit" name="thoat" id="thoat" value="Thoát" /> -->
    </div></td>
  </tr>
</table>
</form>
  <tr>
    <div align="center">
                 
              <br><br>
                      
                <a  href="View/suacauhoi.php?monhoc=<?php 
                  echo $monhoc ?>&baithi=<?php echo $baithi ?> ">
                 <button  type="submit" name="thoat" id="nut" value="thoat" class="btn btn-primary btn-block" style="width: 30%" >THOÁT</button> 
               </a>
            
            <br><br>
    </div>
  </tr>

<?php

  if(isset($_POST['submit']))
  {
    $noidung = $_POST['txt_noidung'];
    $a = $_POST['txt_A'];
    $b = $_POST['txt_B'];
    $c = $_POST['txt_C'];
    $d = $_POST['txt_D'];
    $dapan = $_POST['txt_DapAn'];

    if( $noidung=='' || $a == '' || $b == '' || $c == '' || $d == '' || $dapan == '')
      {
                  echo '<script language="javascript" >
                    alert(" Vui Lòng Nhập Đủ Thông Tin");
                    </script>';
      }
    else
    $t->update_1_cau_hoi($macauhoi,$noidung,$a,$b,$c,$d,$dapan);
  echo '<meta http-equiv="refresh" content="0" />';
  }

  if(isset($_POST['thoat']))
  {
        $_SESSION['ma_cau_hoi'] = $mach;
  echo '<script type="text/javascript">
              window.location = "View/suacauhoi.php";
            </script>
            ';
  }
?>

</div>

<?php require_once("footer.php");?>