   <?php 
session_start();
require_once("header_student.php");
require_once("../Controller/controller_lambaithi.php"); 
$p = new controller_lambaithi();
session_start();
$id_TK = $_SESSION['ID'];

?>
<style type="text/css">


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
        <div id="noidung" >
        	<div align="center">
        	<?php
 			$p->load_diem_all($id_TK);
 			?>
 			</div>
          </div>
                <a  href="View/montienganh.php?monhoc=<?php 
                  echo $monhoc ?> ">
                 <button  type="submit" name="thoat" id="nut" value="thoat" class="btn btn-primary btn-block" style="width: 30%;    margin-left: 4%;" >THOÁT</button> 
               </a>   
        </div> 
      </div>
     </div>
     
<?php require_once("footer.php");?>
