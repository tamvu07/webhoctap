<?php 
  require_once("../Controller/controller_lambaithi.php"); 
$t = new controller_lambaithi();
session_start();
require_once("header_teacher.php");
$monhoc =  $_GET['monhoc'];
?>

<div class="main-container container" id="main-container" style="    background-color: #fff; "> 
<form method="POST">
<table width="600" border="1" align="center">
  <tr>
    <td colspan="2"><div align="center">Tạo Câu Hỏi</div></td>
  </tr>
  <tr>
    <td>Môn học</td>
    <td>
      <?php 
      $monhoc =  $_GET['monhoc'];
      if($monhoc == 1)
      {
        echo "Tiếng Anh";
      }else{
        echo "....";
      }
      ?>
      

    </td>
  </tr>
<!--   <tr>
    <td width="291">Ma de</td>
    <td width="293">
      <select name="made" size="1" id="made">
        <?php
          $t->lay_made_select();
        ?>
    </select></td>
  </tr> -->
  <tr>
    <td>Noi dung</td>
    <td>
    <textarea name="txtnoidung" id="txtnoidung" rows="3"></textarea></td>
  </tr>
  <tr>
    <td>A</td>
    <td><input type="text" name="txtA" id="txtA" /></td>
  </tr>
  <tr>
    <td>B</td>
    <td><input type="text" name="txtB" id="txtB" /></td>
  </tr>
  <tr>
    <td>C</td>
    <td><input type="text" name="txtC" id="txtC" /></td>
  </tr>
  <tr>
    <td>D</td>
    <td><input type="text" name="txtD" id="txtD" /></td>
  </tr>
  <tr>
    <td>Dap an</td>
    <td><input type="text" name="txtDapAn" id="txtDapAn" /></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="submit" id="submit" value="ĐĂNG" />
      <input type="reset" name="Reset" id="button" value="XÓA" />
    </div></td>
  </tr>
</table>
</form>
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

<?php
  if(isset($_POST['submit']))
  {
    $mamonhoc = $_GET['monhoc'];
    $made = $_POST['made'];
    $noidung = $_POST['txtnoidung'];
    $a = $_POST['txtA'];
    $b = $_POST['txtB'];
    $c = $_POST['txtC'];
    $d = $_POST['txtD'];
    $dapan = $_POST['txtDapAn'];
    if($mamonhoc == '' || $noidung=='' || $a == '' || $b == '' || $c == '' || $d == '' || $dapan == '')
      {
                  echo '<script language="javascript" >
                    alert(" Vui Lòng Nhập Đủ Thông Tin");
                    </script>';
      }
    else{
      if($dapan != $a && $dapan != $b && $dapan != $c  && $dapan != $d)
      {
                   echo '<script language="javascript" >
                    alert("Đáp Án Không Tồn Tại Trong Câu Hỏi !");
                    </script>';         
      }else{
          $t->them_cau_hoi($mamonhoc,$made,$noidung,$a,$b,$c,$d,$dapan);
      }
    }


    
  }
?>

</div>

<?php require_once("footer.php");?>

    <script>

        $(document).ready(function () { 

         $('#txtDapAn').blur(function () { 

            var A = $('#txtA').val(); 
            var B = $('#txtB').val(); 
            var C = $('#txtC').val(); 
            var D = $('#txtD').val(); 
            var dapan = $('#txtDapAn').val(); 

            if(dapan != A && dapan != B && dapan != C && dapan != D)
            {
              alert("Đáp Án Không Tồn Tại Trong Câu Hỏi !");
            }

            });
     });
 </script>
