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
         	<a href="project.php" title="Projects" class="project"> 
         		<img src="img/project.png"/>
            </a>
        </div>
  		<div id="configuration_ico">
	        <a href="project_enlist.php" title="New project" class="project"> 
        		<img src="img/project_enlist.png" />
             </a>
        </div>
        <div id="configuration_ico">
	        <a href="project_modify.php" title="Update project" class="project">
        		<img src="img/project_modify.png" />
             </a>
        </div>
        <div id="configuration_ico">
        	<a href="project_terminate.php" title="Delete project" class="student">	
        		<img src="img/project_terminate.png" />
             </a>
        </div>
  </div><!--configuration segment-->

 <div id="information">
 <div name="div_dynamic" id="div_dynamic" class="div_dynamic">
   <table id='table_init' align="center" cellspacing="10px" cellpadding="10px">
   		<tbody>
			 <?php 
            require_once '../model/project_class.php'; 
            session_start();
            
            $array_project = unserialize($_SESSION['projects']);
             
            //table's header
			echo "<tr id='row_init_header' align='center'>";
				echo "<td id='cell_init_header'>PROJECT NAME</td>";
				echo "<td id='cell_init_header'>STATUS</td>";
				echo "<td id='cell_init_header'>START DATE</td>";
			echo "</tr>"; 
             
             foreach ($array_project as $project)
             { 
              	echo "<tr id='row_init' align='center'>";
					echo "<td id='cell_init'>".$project->getName()."</td>";
					echo "<td id='cell_init'>".$project->getStatus()."</td>";
					echo "<td id='cell_init'>".$project->getStartDate()."</td>";
				echo "</tr>";
             }
             ?>
     	</tbody>
     </table>
 </div>   
 </div>
 
 <div id="clear"></div> 
    
</div>  <!--Close section -->  
</div>  <!--Close CONTENT -->  
 
  <?php include 'footer.php'; ?>
  
</body>
</html>
