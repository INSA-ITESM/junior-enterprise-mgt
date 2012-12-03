<?php
/*In this class we'll develop all the needed queries in the platform*/

	require_once "database_settings.php";
	require_once "enterprise_class.php";
	require_once "project_class.php";
	require_once "student_class.php";

	class query{
		
		public function getArrayEnterprise(){	
			
			$counter=0;
			
			$array[] = array();
			$db = new data_base();
			
			$db->connect();
		
			$query = "SELECT * FROM enterprise;";//You need to mody with your SQL sentence
			
			$conec= $db->getConnection();
			
			//In this case, we requested information from the database so the SQL sentence return a array with the result and we need to store in a variable
			$result = mysql_query($query, $conec) or die("ERROR: ".mysql_error());
			
			//To read the result of the SQL sentence, we need to use exactly this while loop
			while($rows=mysql_fetch_array($result)){	
							
			$array[$counter] = new enterprise($rows[0],$rows[1],$rows[2],$rows[3],$rows[4],$rows[5],$rows[6],$rows[7],$rows[8],$rows[9],$rows[10],$rows[11]);//In this part we do an enterprise (object) array; the row is exactly like the database was created. If you use the SQL file that we send you, you can only see the picture (jr_enterprise_database.png) to know how the order of the atributes is

				$counter++;
				
			}
		
			return $array;
		}
		
		public function setNewEnterprise($name_enterprise,$address_enterprise,$city,$state,$country,$pc,$line_business,$name_contact,$phone_contact,$mail_contact,$job_title_contact){	
			
			$db = new data_base();
			
			$db->connect();
		
			$query = "INSERT INTO enterprise (name_enterprise,address_enterprise,city_enterprise,state_enterprise,country_enterprise,pc_enterprise,line_business_enterprise,name_contact,phone_contact,mail_contact,job_title_contact) VALUES  ('$name_enterprise','$address_enterprise','$city','$state','$country','$pc','$line_business','$name_contact','$phone_contact','$mail_contact','$job_title_contact');";
			
			
			$conec= $db->getConnection();

			//In this case, the method return anything.
			mysql_query($query, $conec) or die("ERROR: ".mysql_error());
		}
		
		public function modifyEnterprise($name_enterprise,$address_enterprise,$city,$state,$country,$pc,$line_business,$name_contact,$phone_contact,$mail_contact,$job_title_contact){	
			$db = new data_base();
			
			$db->connect();
		
			$query = "update enterprise set address_enterprise='$address_enterprise',city_enterprise='$city',state_enterprise= '$state',country_enterprise='$country',pc_enterprise='$phone_contact',line_business_enterprise='$line_business',name_contact='$name_contact',phone_contact='$phone_contact',mail_contact='$mail_contact',job_title_contact='$job_title_contact' where name_enterprise='$name_enterprise';";
			
			
			$conec= $db->getConnection();

			//In this case, the method return anything.
			mysql_query($query, $conec) or die("ERROR: ".mysql_error());
		}
		
		
		public function getArrayProject(){
				
			$counter=0;
				
			$array[] = array();
			$db = new data_base();
				
			$db->connect();
		
			$query = "SELECT * FROM project;";//You need to mody with your SQL sentence
				
			$conec= $db->getConnection();
				
			//In this case, we requested information from the database so the SQL sentence return a array with the result and we need to store in a variable
			$result = mysql_query($query, $conec) or die("ERROR: ".mysql_error());
				
			//To read the result of the SQL sentence, we need to use exactly this while loop
			while($rows=mysql_fetch_array($result)){
					
				$array[$counter] = new project($rows[0],$rows[1],$rows[2],$rows[3],$rows[4],$rows[5]);//In this part we do a project (object) array; the row is exactly like the database was created. If you use the SQL file that we send you, you can only see the picture (jr_enterprise_database.png) to know how the order of the atributes is
		
				$counter++;
		
			}
		
			return $array;
		}
		
		public function setNewProject($id_entreprise, $name_project,$status_project,$start_date,$tasks){
				
			$db = new data_base();
				
			$db->connect();
		
			$query = "INSERT INTO project (id_entreprise,name_project,status_project,start_date_project,tasks_project) VALUES  ('$id_entreprise', '$name_project','$status_project','$start_date','$tasks');";
				
				
			$conec= $db->getConnection();
		
			//In this case, the method return anything.
			mysql_query($query, $conec) or die("ERROR: ".mysql_error());
		}
		
		public function modifyProject($id_project, $id_entreprise, $name_project,$status_project,$start_date,$tasks){
			$db = new data_base();
				
			$db->connect();
		
			$query = "update project set id_enterprise='$id_entreprise',name_project='$name_project',status_project= '$status_project',start_date_project='$start_date',tasks_project='$tasks' where id_project='$id_project';";
				
				
			$conec= $db->getConnection();
		
			//In this case, the method return anything.
			mysql_query($query, $conec) or die("ERROR: ".mysql_error());
		}
	}
?>