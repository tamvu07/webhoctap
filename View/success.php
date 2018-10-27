<?php
session_start();
require_once "../Model/Model.php";
$toeic = new model();

	if(isset($_POST["button"])){
		$username = $_POST["username"];
		$password = $_POST["password"];
		$_SESSION['username'] =$_POST["username"];

		if($_SESSION['NguoiDung'] ='1'){
			header('location:hv.php');
		}else{
			header('location:gv.php');
		}
	}
		
	
	

?>