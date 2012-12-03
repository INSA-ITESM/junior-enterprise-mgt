<?php
/**********************************************
* File: project_class.php		      *
* Author: Sébastien M.			      *
* Description: Model of a project	      *
**********************************************/

require_once( 'student_class.php' );
require_once( 'enterprise_class.php' );

class project {
	
	// Attributes
	private $id;		// Integer
	private $enterprise;	// Instance
	private $name;		// Varchar
	private $status;        // Varchar
	private $start_date;    // Varchar	
	private $tasks;     	// Varchar

	private $students;	// Array

	// Constructor
	public function project($id, $enterprise, $name, $status, $start_date, $tasks)
	{
		$this->id = $id;
		$this->enterprise = $enterprise;
		$this->name = $name;
		$this->status = $status;
		$this->start_date = $start_date;
		$this->tasks = $tasks;
	}

	/**
	* Helper that retrieves every student attached to this project.
	*/
	private function retrieveAttachedStudent() {
		//TODO
	}
	
	// Getters & Setters
	public function setId($temp) {
  		$this->id = $temp;
	}
	
	public function setEnterprise($temp) {
  		$this->enterprise = $temp;
	}
	
	public function setName($temp) {
  		$this->name = $temp;
	}
	
	public function setStatus($temp) {
  		$this->status = $temp;
	}
	
	public function setStartDate($temp) {
  		$this->start_date = $temp;
	}
	
	public function setTasks($temp) {
  		$this->tasks = $temp;
	}
	
	
	public function getId() {
  		return $this->id;
	}
	
	public function getEnterprise() {
  		return $this->enterprise;
	}
	
	public function getName() {
  		return $this->name;
	}
	
	public function getStatus() {
  		return $this->status;
	}
	
	public function getStartDate() {
  		return $this->start_date;
	}
	
	public function getTasks() {
  		return $this->tasks;
	}

        // Entity manipulation

        /**
        * Get a project by its unique ID
        * @param id Project unique identifier
        * @return An initialized project instance representing the project
        * @throws Exception Raised in case the project has not been found.
        */
        public static function getProjectById( $id ) {
                // TODO
        }

        /**
        * Get all the recorded projects
        * @return An array containing all the recorded projects
        */
        public static function getProjects() {
                // TODO
        }

        /**
        * Record a new project into the platform
        * @throw Exception Raised if an error occured while recording data
        */
        public static function addProject( $enterprise, $name, $status, $start_date, $tasks ) {
                // TODO
        }

        /**
        * Update an existing project of the platform
        * @throw Exception Raised if an error occured while updating data
        */
        public static function updateProject( $id, $enterprise, $name, $status, $start_date, $tasks ) {
                // TODO
        }

        /**
        * Erase an project from the platform
        * @throw Exception Raised if an error occured while erasing data
        */
        public static function removeProject( $id ) {
                // TODO
        }
}

?>
