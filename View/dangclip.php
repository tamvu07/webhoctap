   <?php 
session_start();
require_once("header_teacher.php");
  require_once("../Controller/controller_dangbai.php"); 
$t = new controller_dangbai();
$monhoc =  $_REQUEST['monhoc'];
?>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <div class="main-container container" id="main-container" style="    background-color: #fff; ">

      <div class="container" >
      <form  method="post" enctype="multipart/form-data">
      <div align="center">
<table width="600" border="2" align="center">
  <tr>
    <td width="192">Tên Clip</td>
    <td width="392"><label for="txt_tenclip"></label>
      <input type="text" name="txt_tenclip" id="txt_tenclip" /></td>
  </tr>
  <tr>
    <td>Mô Tả</td>
    <td><label for="t_mota"></label>
      <textarea name="t_mota" id="t_mota" cols="45" rows="5"></textarea></td>
  </tr>
  <tr>
    <td>Môn Học</td>
    <td><label for="dsmh"></label>
      <select name="dsmh" id="dsmh">
        <option value="0">Chọn Môn Học </option>
        <option value="1">Tiêng Anh</option>
        <option value="2">Lập Trình C++</option>
      </select></td>
  </tr>
  <tr>
    <td>Clip</td>
    <td><label for="clip"></label>
      <input type="file" name="clip" id="clip" /></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="dang_clip" id="dang_clip" value="Đăng" class="btn btn-secondary"/>
    </div></td>
    </tr>
</table>
 </div>
      </form>
  <?php
if(isset($_POST['dang_clip']))
{
   $ten_clip =  isset($_POST['txt_tenclip']) ? $_POST['txt_tenclip'] : "";
   $mota =  isset($_POST['t_mota']) ? $_POST['t_mota'] : "";
   $monhoc =  isset($_POST['dsmh']) ? $_POST['dsmh'] : "0";
   $clip =  isset($_FILES['clip']['name']) ? $_FILES['clip']['name'] : "";

   if($ten_clip == "" || $mota == "" || $monhoc == "0" || $clip == "" )
   {
           echo '
          <script type="text/javascript">
            alert("Chưa Điền Đủ Dữ Liệu !");
          </script>
          ';
   }else{
          $clip_name = basename($_FILES['clip']['name']);
          $clip_tmp = $_FILES['clip']['tmp_name'];
          $duongdan = "../clip/".$clip_name;
          move_uploaded_file($clip_tmp, $duongdan);
                     echo '
          <script type="text/javascript">
            alert("Đăng Thành Công !");
          </script>
          ';
   }
}


  ?>     

   


          <a  href="View/montienganh_gv.php?monhoc=<?php 
                  echo $monhoc ?> ">
                 <button  type="submit" name="thoat"   class="btn btn-primary btn-block" style="width: 100%" >THOÁT</button> 
               </a>
      </div>
     </div>
     
<?php require_once("footer.php");?>
