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
        <a href="enterprise.php" class="enterprises">Enterprises</a><br />
        <a href="student.php" class="students">Students</a><br /> 
        <a href="project.php" class="projects">Projects</a> <br />
       </div>
  </div> <!--Close MENU -->
  
  <div id="close_session"> <a href="../index.php"><img name="logout" src="img/logout.png" width="120" height="24" id="logout" alt="" /></a></div>
  
  </div> <!--Close W_MENU -->
 
  <div id="configuration"> <!--configurationsegment-->
   		<div id="configuration_ico">
         	<a href="enterprise.php" title="Enterprises" class="enterprise"> 
         		<img src="img/enterprise.png"/>
            </a>
        </div>
  		<div id="configuration_ico">
	        <a href="enterprise_enlist.php" title="New enterprise" class="enterprise"> 
        		<img src="img/enterprise_enlist.png" />
             </a>
        </div>
        <div id="configuration_ico">
	        <a href="enterprise_modify.php" title="Update enterprise" class="enterprise">
        		<img src="img/enterprise_modify.png" />
             </a>
        </div>
        <div id="configuration_ico">
        	<a href="enterprise_terminate.php" title="Delete enterprise" class="enterprise">	
        		<img src="img/enterprise_terminate.png" />
             </a>
        </div>
  </div><!--configuration segment-->

<div id="information">
 <div name="div_dynamic" id="div_dynamic" class="div_dynamic">
 
   <form id="enterprise_update" name="enterprise_update" method="post" action="../controller/enterprise_update_controller.php" enctype="multipart/form-data">
   
   		<table id="table_init" align="center" cellspacing="10px" cellpadding="10px">
        	<tbody>
           		<tr>
                	<td id="cell_form_text">
                   		<label id="form_new">Name of enterprise: </label>
                   	</td>
                                  
                    <td>
                    	<input type="text" name="name_enterprise" id="name_enterprise" />
                    </td>
				</tr>
                              
           		<tr>
                	<td id="cell_form_text">
                   		<label id="form_new">Address: </label>
                   	</td>
                                  
                    <td>
                    	<input type="text" name="address_enterprise" id="address_enterprise" />
                    </td>
				</tr>
                
                <tr>
                	<td id="cell_form_text">
                   		<label id="form_new">City: </label>
                   	</td>
                                  
                    <td>
                    	<input type="text" name="city" id="city" />
                    </td>
				</tr>
                
                <tr>
                	<td id="cell_form_text">
                   		<label id="form_new">State: </label>
                   	</td>
                                  
                    <td>
                    	<input type="text" name="state" id="state" />
                    </td>
				</tr>
                
                <tr>
                	<td id="cell_form_text">
                   		<label id="form_new">Country: </label>
                   	</td>
                                  
                    <td>
                    	<input type="text" name="country" id="country" />
                    </td>
				</tr>
                
                <tr>
                	<td id="cell_form_text">
                   		<label id="form_new">Postal code: </label>
                   	</td>
                                  
                    <td>
                    	<input type="text" name="pc" id="pc" />
                    </td>
				</tr>
                
                <tr>
                	<td id="cell_form_text">
                   		<label id="form_new">Lines business: </label>
                   	</td>
                                  
                    <td>
                    	<input type="text" name="line_business" id="line_business" />
                    </td>
				</tr>
                
                <tr>
                	<td id="cell_form_text">
                   		<label id="form_new">Name of enterprise's contact: </label>
                   	</td>
                                  
                    <td>
                    	<input type="text" name="name_contact" id="name_contact" />
                    </td>
				</tr>
                
                <tr>
                	<td id="cell_form_text">
                   		<label id="form_new">Phone of enterprise's contact: </label>
                   	</td>
                                  
                    <td>
                    	<input type="text" name="phone_contact" id="phone_contact" />
                    </td>
				</tr>
                
                <tr>
                	<td id="cell_form_text">
                   		<label id="form_new">Mail of enterprise's contact: </label>
                   	</td>
                                  
                    <td>
                    	<input type="text" name="mail_contact" id="mail_contact" />
                    </td>
				</tr>
                
                <tr>
                	<td id="cell_form_text">
                   		<label id="form_new">Job title of enterprise's contact: </label>
                   	</td>
                                  
                    <td>
                    	<input type="text" name="job_title_contact" id="job_title_contact" />
                    </td>
				</tr>
                                              
                <tr>
                	<td>
                                      
                    </td>
                                  
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