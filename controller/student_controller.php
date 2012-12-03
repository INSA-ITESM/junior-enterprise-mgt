<?php
	require_once "../model/student_class.php";
	
	//With the following sentences you can store a data form this php and we can use in another php file, if you need 
	//more than one, you can add many "$_SESSION[VARIABLE]" as you want
	session_start();

	$array_students =  student::getStudents();

	//the "$_SESSION[VARIABLE]" variable don't admit to store objects, so we need to convert the enterprise array into
	// string, we can do this with the function "serialize()"
	$_SESSION["students"] = serialize($array_students);
	
	/* Using header func rather than a javascript relocation (even if it still is dirty) */
	header( "Location: ../view/student.php" );
?>
