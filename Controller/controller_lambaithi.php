<?php
//include_once("../Model/Model.php");

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
    			/*echo "dap an sai la :".$value."<br>";*/
			}
			/*echo "co ".$i."dap an sai nha !";*/
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



}

?>