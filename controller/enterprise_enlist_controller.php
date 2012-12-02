<?php
	require_once "../model/query.php";
	
	$name_enterprise = $_POST["name_enterprise"];
	$address_enterprise = $_POST["address_enterprise"];
	$city = $_POST["city"];
	$state = $_POST["state"];	
	$country = $_POST["country"];
	$pc = $_POST["pc"];
	$line_business = $_POST["line_business"];
	$name_contact = $_POST["name_contact"];
	$phone_contact = $_POST["phone_contact"];
	$mail_contact = $_POST["mail_contact"];
	$job_title_contact = $_POST["job_title_contact"];

	$query = new query();

	$query->setNewEnterprise($name_enterprise,$address_enterprise,$city,$state,$country,$pc,$line_business,$name_contact,$phone_contact,$mail_contact,$job_title_contact);
	
	echo "<script>window.location='../controller/enterprise_controller.php';</script>";
?>