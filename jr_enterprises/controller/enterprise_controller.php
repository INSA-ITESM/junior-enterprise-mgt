<?php
	require_once "../model/query.php";
	
	//With the following sentences you can store a data form this php and we can use in another php file, if you need 
	//more than one, you can add many "$_SESSION[VARIABLE]" as you want
	session_start();
	$enterprises = $_SESSION["enterprises"];


	$query = new query();

	$array_enterprise =  $query->getArrayEnterprise();

	//the "$_SESSION[VARIABLE]" variable don't admit to store objects, so we need to convert the enterprise array into
	// string, we can do this with the function "serialize()"
	$_SESSION["enterprises"] = serialize($array_enterprise);
	
	//we use this simple script to relocate the user's view
	echo "<script>window.location='../view/enterprise.php';</script>";
?>