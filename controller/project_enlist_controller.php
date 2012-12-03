<?php
	require_once "../model/query.php";
	
	$id_enterprise = htmlspecialchars( mysql_escape_string( $_POST["id_enterprise"] ) );
	$name_project = htmlspecialchars( mysql_escape_string( $_POST["name_project"] ) );
	$status_project = htmlspecialchars( mysql_escape_string( $_POST["status_project"] ) );
	$start_date_project = htmlspecialchars( mysql_escape_string( $_POST["start_date_project"] ) );	
	$tasks_project = htmlspecialchars( mysql_escape_string( $_POST["tasks_project"] ) );

	$query = new query();

	$query->setNewProject($id_enterprise,$name_project,$status_project,$start_date_project,$tasks_project);
	
	echo "<script>window.location='../controller/project_controller.php';</script>";
?>
