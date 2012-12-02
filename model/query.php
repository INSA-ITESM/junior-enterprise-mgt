<?php
/*In this class we'll develop all the needed queries in the platform*/

	require_once "database_settings.php";
	require_once "enterprise_class.php";

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
	}
?>