<?php
include_once("../Model/Model.php");

class controller_lambaithi extends Model{

	function chamdiem($array_cautraloi,$array_cautraloi_DB)
	{

		// print_r($array_cautraloi);
		// print_r($array_cautraloi_DB);
		/*lay ra nhung gia tri khac nhau*/
		$result=array_diff($array_cautraloi,$array_cautraloi_DB);		
/*    	print_r($result);*/
		$i = 0;
    	foreach ($result as $key => $value){
    		++$i;
			}
			$diem = 10 - $i;
			return $diem;
	}

	function gettest($monhoc,$test){
			$p = new model();
		  $kq = $p->get_test_databse(1,1);
		  $array_cautraloi_DB = array();
		$i=0;
				while($rows=$kq->fetch_assoc()) {
			echo 'Câu  '.++$i.'&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$rows["NoiDungCauHoi"].'<br>';
			echo '<input name="cauhoiso'.$i.'" type="radio"  value="'.$rows["A"].'"> A. '.$rows["A"].' ';
			echo '<input name="cauhoiso'.$i.'" type="radio"  value="'.$rows["B"].'"> B. '.$rows["B"].' ';
			echo '<input name="cauhoiso'.$i.'" type="radio" value="'.$rows["C"].'"> C. '.$rows["C"].' ';
			echo '<input name="cauhoiso'.$i.'" type="radio"  value="'.$rows["D"].'"> D. '.$rows["D"];
			$array_cautraloi_DB[$i] = $rows['DapAn'];
			echo '<hr width="50%">';
			
		}
		return $array_cautraloi_DB;
	}

	function luu_diem_test($id_TK,$test,$monhoc,$diem)
	{
		$p = new model();
		/*$kq_01 = $->kiemtra_HocVieID_Test_MonHoc($id_TK,$test,$monhoc);*/
		$kq = $p->luu_diem_test_DB($id_TK,$test,$monhoc,$diem);
		return $kq;
	}

	function load_diem($id_TK,$monhoc,$test)
	{
		$p = new model();
		$kq = $p->load_diem_DB($id_TK,$monhoc,$test);
		     $rows = $kq->fetch_assoc();
               $tenhocvien = $rows['TenHocVien'];
               $mamonhoc = $rows['MaMonHoc'];
               if($mamonhoc == 1){
               	$mamonhoc ="Tieng Anh";
               }
               $madethi = $rows['MaDeThi'];
               $diem = $rows['Diem'];
               $date = date("Y-m-d");
               echo '
                <hr>
                <table width="500" border="1">
                  <tr>
                    <td>Họ Tên</td>
                    <td>Môn Học</td>
                    <td>Bài Thi Số</td>
                    <td>Điểm</td>
                    <td>Ngày</td>
                  </tr>
 						<tr>
		                    <td>'.$tenhocvien.'</td>
		                    <td>'.$mamonhoc.'</td>
		                    <td>'.$madethi.'</td>
		                    <td>'.$diem.'</td>
		                    <td>'.$date.'</td>
		                </tr>
                </table>		                
               		';
           
	}


	function lay_made_select() {
		$p = new model();
		$result = $p->select($p->lay_made_select());
		while($rows=$p->load_rows())
		{
			echo '<option value="'.$rows['MaDeThi'].'">'.$rows['MaDeThi'].'</option>';
		}
	}

	function them_cau_hoi($mamon,$made,$noidung,$a,$b,$c,$d,$dapan) {
		$p = new model();
		$result = $p->execute_no_return($p->them_cau_hoi($mamon,$made,$noidung,$a,$b,$c,$d,$dapan));
		if(!$result)
                        echo '<script language="javascript" >
                            alert(" Đã Thêm !");
                            </script>';
		else
                        echo '<script language="javascript" >
                            alert(" Thêm Thất Bại !");
                            </script>';
	}

	function lay_ds_cauhoi()
	{
		$p = new model();
		$kq = $p->lay_ds_cauhoi();
		while($rows=$kq->fetch_assoc()){
			$mamonhoc = $rows['MaMonHoc'];
			if($mamonhoc == 1){
				$mamonhoc = "TIENG ANH";
			}
			$madethi = $rows['MaDeThi'];
			$noidung = $rows['NoiDungCauHoi'];
			$a = $rows['A'];
			$b = $rows['B'];
			$c = $rows['C'];
			$d = $rows['D'];
			$dapan = $rows['DapAn'];
			$id = $rows['MaCauHoi'];
			echo'
				  <tr>
					  <form method="post" action="">
					    <td><div align="center"></div>'.$mamonhoc.'</td>
					    <td><div align="center"></div>'.$madethi.'</td>
					    <td><div align="center"></div>'.$noidung.'</td>
					    <td><div align="center"></div>'.$a.'</td>
					    <td><div align="center"></div>'.$b.'</td>
					    <td><div align="center"></div>'.$c.'</td>
					    <td><div align="center"></div>'.$d.'</td>
					 	<td><div align="center"></div>'.$dapan.'</td>
					    <td><div align="center">
					      <input type="checkbox" name="check" id="'.$id.'" value="'.$id.'"/>
					      </div></td>
					    <td><div align="center"><input type="submit" name="submit" id="'.$id.'" value="ok" /></div></td>
					    </form>
					 </tr>
			';
		}

	}

	function xoa_cau_hoi($macauhoi)
    {
    	$p = new model();
    	$p->execute_no_return($p->xoa_cau_hoi($macauhoi));
    }



    function get_1_cau_hoi($macauhoi)
	{
    	$p = new model();
    	$kq = $p->get_1_cau_hoi($macauhoi);
    	return $kq;	
	}

	function update_1_cau_hoi($macauhoi,$noidung,$a,$b,$c,$d,$dapan)
	{ 
		$p = new model();
    	   $kq = $p->update_1_cau_hoi($macauhoi,$noidung,$a,$b,$c,$d,$dapan);
    	    if ($kq)
              {
                  echo '<script language="javascript" >
                    alert(" Cập Nhập Thành Công");
                    </script>';              
              }else{
                  echo '<script language="javascript" >
                    alert(" Cập Nhập Không Thành Công");
                    </script>'; 
              } 	
	}
}

?>