<?php
	require_once "../model/query.php";
	
	$name_enterprise = htmlspecialchars( mysql_escape_string( $_POST["name_enterprise"] ) );
	$address_enterprise = htmlspecialchars( mysql_escape_string( $_POST["address_enterprise"] ) );
	$city = htmlspecialchars( mysql_escape_string( $_POST["city"] ) );
	$state = htmlspecialchars( mysql_escape_string( $_POST["state"] ) );	
	$country = htmlspecialchars( mysql_escape_string( $_POST["country"] ) );
	$pc = htmlspecialchars( mysql_escape_string( $_POST["pc"] ) );
	$line_business = htmlspecialchars( mysql_escape_string( $_POST["line_business"] ) );
	$name_contact = htmlspecialchars( mysql_escape_string( $_POST["name_contact"] ) );
	$phone_contact = htmlspecialchars( mysql_escape_string( $_POST["phone_contact"] ) );
	$mail_contact = htmlspecialchars( mysql_escape_string( $_POST["mail_contact"] ) );
	$job_title_contact = htmlspecialchars( mysql_escape_string( $_POST["job_title_contact"] ) );

	$query = new query();

	$query->setNewEnterprise($name_enterprise,$address_enterprise,$city,$state,$country,$pc,$line_business,$name_contact,$phone_contact,$mail_contact,$job_title_contact);
	
	echo "<script>window.location='../controller/enterprise_controller.php';</script>";
?>
