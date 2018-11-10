<?php

class controller_login extends Model{

	public function luu_diem_test($username,$password)
	{
		$p = new model();
		$p->test_id_user_DB($username,$password);
	}
}

?>