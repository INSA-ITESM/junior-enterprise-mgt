<?php
session_start();

require_once( "../model/student_class.php" );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="shortcut icon" href="css/logo.ico">
<link rel="stylesheet" href="css/style.css" type="text/css" />
<title>Administration</title>
</head>

<body> <div id="content"> <!--Begin of the content the blue body with a curve -->

  <?php include 'header.php'; ?>
  
  <div id="section"><!--SECTION-->
  
  <div id="w_menu">
  	<h2>Administration</h2>
  <div id="menu">
      <h2>Jr Enterprises</h2>
      
      <div align="left">
        <a href="../controller/enterprise_controller.php" class="enterprises">Enterprises</a><br />
        <a href="../controller/student_controller.php" class="students">Students</a><br /> 
        <a href="../controller/project_controller.php" class="projects">Projects</a> <br />
       </div>
  </div> <!--Close MENU -->
  
  <div id="close_session"> <a href="../index.php"><img name="logout" src="img/logout.png" width="120" height="24" id="logout" alt="" /></a></div>
  
  </div> <!--Close W_MENU -->
 
  <div id="configuration"> <!--configurationsegment-->
   		<div id="configuration_ico">
         	<a href="student.php" title="Students" class="student"> 
         		<img src="img/student.png"/>
            </a>
        </div>
  		<div id="configuration_ico">
	        <a href="student_enlist.php" title="New student" class="student"> 
        		<img src="img/student_enlist.png" />
             </a>
        </div>
        <div id="configuration_ico">
	        <a href="student_modify.php" title="Update student" class="student">
        		<img src="img/student_modify.png" />
             </a>
        </div>
        <div id="configuration_ico">
        	<a href="student_terminate.php" title="Delete student" class="student">	
        		<img src="img/student_terminate.png" />
             </a>
        </div>
  </div><!--configuration segment-->

 <div id="information">
 <div name="div_dynamic" id="div_dynamic" class="div_dynamic">

	<p>Select the student to delete from the system :</p>

	<form method="post" action="../controller/student_terminate_controller.php">

	  <div style="text-align: center;">
		<select size="3" name="student">
			
		<?php
			$array_students = unserialize($_SESSION['students']);

			foreach( $array_students as $student ) {

				echo "<option value=\"".$student->getId()."\">".$student->getName()."</option>";
			}
		?>

		</select>

		<br />

		<input type="submit" value="Delete">	
	  </div>

	</form>

 </div>   
 </div>
 
 <div id="clear"></div> 
    
</div>  <!--Close section -->  
</div>  <!--Close CONTENT -->  
 
  <?php include 'footer.php'; ?>
  
</body>
</html>
