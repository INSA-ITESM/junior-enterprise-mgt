<?php
session_start();
$message = @$_SESSION["message"];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="shortcut icon" href="view/css/logo.ico">
<title>Jr Enterprises</title>
<link rel="stylesheet" href="view/css/style.css" type="text/css" />
</head>

<body>

<div id="content"> <!--Begin of the content -->
  <?php include 'header.php'; ?>
<div id="section"><!--SECCCION-->

<!---->
    <div id="begin"><!--Begin-->
   
    <div id="intro"> <!--INTRO-->
    <h2>Description    </h2>
    <p align="justify">
      Hello, welcome <strong>Jr ENTERPRISES SYSTEM</strong>  a platform of comunication and support for the development of new projects in colaboration with established organizations.   </p>
    <p align="center"><strong>Welcome!</strong></p>
    <p align="justify">&nbsp;</p>
    </div><!--INTRO-->
    </div><!--Begin-->
 
<!--SEGMENT II: LOGIN of user-->    
     <div id="login"><!--LOGIN-->
     <form id="login" name="longin" method="post" action="controller/login.php" enctype="multipart/form-data">
     <h2>Login</h2>
     <table width="70%" border="0" align="center" cellpadding="5">
  	  	<tr>
    	<td><h3>&nbsp;</h3>
    	  <h3>User:</h3>    	  <p class="subinfo">&nbsp;</p></td>
    	<td><span class="rojo"><input type="text" name="f_name" size="15" /></span></td>
  		</tr>
  		<tr>
    	<td><h3>&nbsp;</h3>
    	  <h3>Password:</h3>    	  <p class="subinfo">&nbsp;</p></td>
    	<td><span class="rojo"><input type="password" name="f_pass" size="15"/></span></td>
  		</tr>
  		<tr>
    	<td>&nbsp;</td>
    	<td><input type="submit" name="Submit" value="Login"></td>
  		</tr>
	</table>
     <p class="subinfo" align="center">     <?php 
    echo("<font color='red'><b>".$message." </b></font>");
    $_SESSION['message']="";
     ?> </p>
    </form>
    </div><!--LOGIN-->   
    
   
    <div id="clear"></div>
</div>  <!--CIERRA SECCION -->  
</div>  <!--CIERRA CONTENT -->  
 
  <?php include 'footer.php'; ?>
  
</body>
</html>

