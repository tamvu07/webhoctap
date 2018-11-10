<?php
session_start();
require_once "../Model/Model.php";
$model = new model();


	if(isset($_POST["button"])){
		$username = $_POST["username"];
		$password = $_POST["password"];
	/*	$p->test_id_user($username,$password);*/


		$_SESSION['username'] =$_POST["username"];

		if($_SESSION['NguoiDung'] == 1){
			header('location:hv.php');
		}else if($_SESSION['NguoiDung'] == 2){
			header('location:gv.php');
		}
	}
		
	
	

?>