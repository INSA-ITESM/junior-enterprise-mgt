<?php
/**********************************************
* File: student_class.php		      *
* Author: Sébastien M.			      *
* Description: Model of a student	      *
**********************************************/

require_once( 'database_settings.php' );

class student {
	
	// Attributes
	private $id;		// Integer
	private $url_photo;	// Varchar
	private $name;		// Varchar
	private $mail;          // Varchar
	private $cellphone;     // Varchar	
	private $degree;     	// Varchar
	private $semester;     	// Varchar
	private $skill;     	// Varchar
	private $areas;     	// Varchar

	// Constructor
	public function student($id, $photo, $name, $mail, $cell, $degree, $semester, $skill, $areas)
	{
		$this->id = $id;
		$this->url_photo = $photo;
		$this->name = $name;
		$this->mail = $mail;
		$this->cellphone = $cell;
		$this->degree = $degree;
		$this->semester = $semester;
		$this->skill = $skill;
		$this->areas = $areas;
	}
	
	// Getters & Setters
	public function setId($temp) {
  		$this->id = $temp;
	}
	
	public function setUrlPhoto($temp) {
  		$this->url_photo = $temp;
	}
	
	public function setName($temp) {
  		$this->name = $temp;
	}
	
	public function setMail($temp) {
  		$this->mail = $temp;
	}
	
	public function setCellPhone($temp) {
  		$this->cellphone = $temp;
	}
	
	public function setDegree($temp) {
  		$this->degree = $temp;
	}
	
	public function setSemester($temp) {
  		$this->semester = $temp;
	}
	
	public function setSkill($temp) {
  		$this->skill = $temp;
	}
	
	public function setAreas($temp) {
  		$this->areas = $temp;
	}
	
	public function getId() {
  		return $this->id;
	}
	
	public function getUrlPhoto() {
  		return $this->url_photo;
	}
	
	public function getName() {
  		return $this->name;
	}
	
	public function getMail() {
  		return $this->mail;
	}
	
	public function getCellPhone() {
  		return $this->cellphone;
	}
	
	public function getDegree() {
  		return $this->degree;
	}
	
	public function getSemester() {
  		return $this->semester;
	}
	
	public function getSkill() {
  		return $this->skill;
	}
	
	public function getAreas() {
  		return $this->areas;
	}

	// Entity manipulation

	/**
	* Get an student by its unique ID
	* @param id Student unique identifier
	* @return An initialized student instance representing the student
	* @throws Exception Raised in case the student has not been found.
	*/
	public static function getStudentById( $id ) {

		$db = new data_base();
		$result = null;

		/* Connecting to the database */
		$db->connect();
		$cnx = $db->getConnection();

		/* Preparing statment then execute it */
                $query = "SELECT * FROM student where id_student = ".$id;

		$result = mysql_query($query, $cnx);
		if( !$result ) {
			$db->close();
			throw new exception( "An error occured while executing a request : ". mysql_error() );
		}

		/* Fetch the row that matches */
		$data = mysql_fetch_row($result);
		if( !$data ) {
			$db->close();
			throw new exception( "This student has not been found." );
		}

		/* Instantiate the object */
		$result = new student( $id, $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8] );

		/* Finally, close the database */
		$db->close();

		return $result;
	}

	/**
	* Get all the recorded students
	* @return An array containing all the recorded students
	*/
	public static function getStudents() {

		$db = new data_base();
                $result = array();

                /* Connecting to the database */
                $db->connect();
                $cnx = $db->getConnection();

                /* Preparing statment then execute it */
                $query = "SELECT * FROM student";

                $result = mysql_query($query, $cnx);
                if( !$result ) {
                        $db->close();
                        throw new exception( "An error occured while executing a request : ". mysql_error() );
                }

		/* For each row found, instantiate the object and then, push it into the array */
                while( $row = mysql_fetch_array($result) ) {

			$currentStudent = new student( $id, $row['url_photo_student'], $row['name_student'], $row['mail_student'], 
                                                $row['cellphone_student'], $row['degree_student'], $row['semester_student'], 
                                                $row['skill_student'], $row['areas_student'] );

			$result[] = $currentStudent;
                }

		/* Finally, close the database */
		$db->close();		

		return $result;
	}

	/**
	* Record a new student into the platform
	* @throw Exception Raised if an error occured while recording data
	*/
	public static function addStudent( $photo, $name, $mail, $cell, $degree, $semester, $skill, $areas ) {

		$db = new data_base();

                /* Connecting to the database */
                $db->connect();
                $cnx = $db->getConnection();

                /* Preparing statment then execute it */
                $query = "INSERT INTO student (url_photo_student, name_student, mail_student, cellphone_student, degree_student, semester_student, skill_student, areas_student) VALUES ('".$photo."', '".$name."', '".$mail."', '".$cell."', '".$degree."', '".$semester."', '".$skill."', '".$areas."' )";

		$result = mysql_query( $query, $cnx );
		if( !$result ) {
			$db->close();
			throw new exception( "An error occured while recording data : ".mysql_error );
		}

		$db->close();
	}

	/**
	* Update an existing student of the platform
	* @throw Exception Raised if an error occured while updating data
	*/
	public static function updateStudent( $id, $photo, $name, $mail, $cell, $degree, $semester, $skill, $areas ) {
		
		$db = new data_base();

		/* Connecting to the database */
                $db->connect();
                $cnx = $db->getConnection();

                /* Preparing statment then execute it */
                $query = "UPDATE student SET url_photo_student = '".$photo."', name_student = '".$name."', mail_student = '".$mail."', cellphone_student = '".$cell."', degree_student = '".$degree."', semester_student = '".$semester."', skill_student = '".$skill."', areas_student = '".$areas."' WHERE id_student = ".$id;

                $result = mysql_query( $query, $cnx );
                if( !$result ) {
                        $db->close();
                        throw new exception( "An error occured while updating data : ".mysql_error );
                }

		$db->close();		
	}

	/**
	* Erase an student from the platform
	* @throw Exception Raised if an error occured while erasing data
	*/
	public static function removeStudent( $id ) {

		$db = new data_base();

		/* Connecting to the database */
                $db->connect();
                $cnx = $db->getConnection();

                /* Preparing statment then execute it */
                $query = "DELETE FROM student WHERE id_student = ".$id;

                $result = mysql_query( $query, $cnx );
                if( !$result ) {
                        $db->close();
                        throw new exception( "An error occured while removing data : ".mysql_error );
                }

		$db->close();
	}
}

?>
