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
 <form id="project_enlist" name="project_enlist" method="post" action="../controller/project_enlist_controller.php" enctype="multipart/form-data">
   
<table id="table_init" align="center" cellspacing="10px" cellpadding="10px">
        	<tbody>
           		<tr>
                	<td id="cell_form_text">
                   		<label id="form_new">Id of enterprise: </label>
                   	</td>
                                  
                    <td>
                    	<input type="text" name="id_enterprise" id="id_enterprise" />
                    </td>
				</tr>
                              
           		<tr>
                	<td id="cell_form_text">
                   		<label id="form_new">Name of project: </label>
                   	</td>
                                  
                    <td>
                    	<input type="text" name="name_project" id="name_project" />
                    </td>
				</tr>
                
                <tr>
                	<td id="cell_form_text">
                   		<label id="form_new">Status of project: </label>
                   	</td>
                                  
                    <td>
                    	<input type="text" name="status_project" id="status_project" />
                    </td>
				</tr>
                
                <tr>
                	<td id="cell_form_text">
                   		<label id="form_new">Start date: </label>
                   	</td>
                                  
                    <td>
                    	<input type="text" name="start_date_project" id="start_date_project" />
                    </td>
				</tr>
                
                <tr>
                	<td id="cell_form_text">
                   		<label id="form_new">Tasks: </label>
                   	</td>
                                  
                    <td>
                    	<input type="text" name="tasks_project" id="tasks_project" />
                    </td>
				</tr>
                              
                    <td>
                    	<input type="submit" id="sumit_form" value="Save"/>
                    </td>
                                  
                </tr>
                            
			</tbody>
		</table>
		</form>
 </div>   
 </div>
 
 <div id="clear"></div> 
    
</div>  <!--Close section -->  
</div>  <!--Close CONTENT -->  
 
  <?php include 'footer.php'; ?>
  
</body>
</html>
