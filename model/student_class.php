<?php
/**********************************************
* File: student_class.php		      *
* Author: Sébastien M.			      *
* Description: Model of a student	      *
**********************************************/

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
	* Get an enterprise by its unique ID
	* @param id Enterprise unique identifier
	* @return An initialize enterprise instance representing the enterprise
	* @throws Exception Raised in case the enterprise has not been found.
	*/
	public static function getEntrepriseById( $id ) {
		// TODO
	}

	/**
	* Get all the recorded enterprises
	* @return An array containing all the recorded enterprises
	*/
	public static function getEnterprises() {
		// TODO
	}

	/**
	* Record a new enterprise into the platform
	* @throw Exception Raised if an error occured while recording data
	*/
	public static function addEnterprise( $photo, $name, $mail, $cell, $degree, $semester, $skill, $areas ) {
		// TODO
	}

	/**
	* Update an existing enterprise of the platform
	* @throw Exception Raised if an error occured while updating data
	*/
	public static function updateEnterprise( $id, $photo, $name, $mail, $cell, $degree, $semester, $skill, $areas ) {
		// TODO
	}

	/**
	* Erase an enterprise from the platform
	* @throw Exception Raised if an error occured while erasing data
	*/
	public static function removeEnterprise( $id ) {
		// TODO
	}
}

?>
