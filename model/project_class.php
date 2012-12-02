<?php
/**********************************************
* File: project_class.php		      *
* Author: Sébastien M.			      *
* Description: Model of a project	      *
**********************************************/

class project {
	
	// Attributes
	private $id;		// Integer
	private $enterprise;	// Instance
	private $name;		// Varchar
	private $status;        // Varchar
	private $start_date;    // Varchar	
	private $tasks;     	// Varchar

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
}

?>
