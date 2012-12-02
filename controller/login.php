<?php
session_start();

$user = $_POST['f_name'];
$pass = $_POST['f_pass'];

if ($user == "admin" && $pass == 1234)
{
	echo "<script>window.location='../view/main.php';</script>";
}
else{
	if($user == "" || $pass == ""){
		$_SESSION['message'] = "You must introduce a user and a password";
		echo "<script>window.location='../index.php';</script>";
	}else{
		if ($user== admin){
			$_SESSION['message'] = "Invalid password";
		echo "<script>window.location='../index.php';</script>";
		}else
		{
			$_SESSION['message'] = "Invalid User";
		echo "<script>window.location='../index.php';</script>";
		}
	
	}
}
?>