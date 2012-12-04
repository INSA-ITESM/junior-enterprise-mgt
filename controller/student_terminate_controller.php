<?php
	require_once "../model/student_class.php";
	
	$student = mysql_escape_string( $_POST["student"] );

	student::removeStudent( $student );
	
	header( "Location: ../controller/student_controller.php" );
?>
