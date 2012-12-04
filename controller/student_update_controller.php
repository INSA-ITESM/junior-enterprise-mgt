<?php
	require_once "../model/student_class.php";
	
	$id = htmlspecialchars( mysql_escape_string( $_POST["id"] ) );
	$name = htmlspecialchars( mysql_escape_string( $_POST["name"] ) );
	$mail = htmlspecialchars( mysql_escape_string( $_POST["mail"] ) );
	$cell = htmlspecialchars( mysql_escape_string( $_POST["cell"] ) );
	$degree = htmlspecialchars( mysql_escape_string( $_POST["degree"] ) );	
	$semester = htmlspecialchars( mysql_escape_string( $_POST["semester"] ) );
	$skill = htmlspecialchars( mysql_escape_string( $_POST["skill"] ) );
	$areas = htmlspecialchars( mysql_escape_string( $_POST["areas"] ) );

	student::updateStudent( $id, '', $name, $mail, $cell, $degree, $semester, $skill, $areas );
	
	header( "Location: ../controller/student_controller.php" );
?>
