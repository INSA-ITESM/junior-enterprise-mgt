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

 <form id="student_enlist" method="post" action="../controller/student_enlist_controller.php" enctype="multipart/form-data">

                <table id="table_init" align="center" cellspacing="10px" cellpadding="10px">
                <tbody>
                        <tr>
                        <td id="cell_form_text">
                                <label id="form_new">Name: </label>
                        </td>
			<td>
                        	<input type="text" name="name" />
                        </td>
			</tr><tr>
                        <td id="cell_form_text">
                                <label id="form_new">Mail address: </label>
                        </td>
			<td>
                        	<input type="text" name="mail" />
                        </td>
			</tr><tr>
                        <td id="cell_form_text">
                                <label id="form_new">Cellphone: </label>
                        </td>
			<td>
                        	<input type="text" name="cell" />
                        </td>
			</tr><tr>
                        <td id="cell_form_text">
                                <label id="form_new">Degree: </label>
                        </td>
			<td>
                        	<input type="text" name="degree" />
                        </td>
			</tr><tr>
                        <td id="cell_form_text">
                                <label id="form_new">Semester: </label>
                        </td>
			<td>
                        	<input type="text" name="semester" />
                        </td>
			</tr><tr>
                        <td id="cell_form_text">
                                <label id="form_new">Skills: </label>
                        </td>
			<td>
                        	<input type="text" name="skill" />
                        </td>
			</tr><tr>
                        <td id="cell_form_text">
                                <label id="form_new">Areas: </label>
                        </td>
			<td>
                        	<input type="text" name="areas" />
                        </td>
			</tr>
			<tr>
			<td></td>
			<td>
				<input type="submit" value="Add student">
			</td>
			</tr>
		</tbody>
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
