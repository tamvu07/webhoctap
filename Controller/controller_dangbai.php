<?php
include_once("../Model/Model.php");

class controller_dangbai extends Model{

	function insert_text($content,$monhoc)
	{
		$p = new model();
		$kq = $p->insert_text($content,$monhoc);
		if($kq){
			echo '
					<script type="text/javascript">
					  alert("them ok ");
					</script>
			';
		}else{
			echo '
					<script type="text/javascript">
					  alert("them khong ok ");
					</script>
			';			
		}
	}

	function show_text()
	{
		$p = new model();
		$kq = $p->show_text();
		if($kq == 0)
		{
			echo "khong show duoc !";
		}else{ 
			while($rows = $kq->fetch_assoc() )
			{
				echo $rows['BaiGiang'];
			}
		}
	}

	function get_text()
	{
		$p = new model();
		$kq = $p->show_text();
		if($kq == 0)
		{
			echo "khong lay duoc !";
		}else{ 
			$rows = $kq->fetch_assoc() ;
			
				return $rows['BaiGiang'];
			
		}
	}	
	
}

?>