<?php

class enterprise{
	
	//Attributes
	private $id;
	private $name_enterprise;
	private $address_enterprise;
	private $city;
	private $state;	
	private $country;
	private $pc;
	private $line_business;
	private $name_contact;
	private $phone_contact;
	private $mail_contact;
	private $job_title_contact;
	
	//Constructor
	function enterprise($t_id, $t_nam_ent, $t_add_ent, $t_cit, $t_sta, $t_cou, $t_pc, $t_lin_bus, $t_nam_con, $t_pho_con, $t_mai_cont, $t_job_con)
	{
		$this->id = $t_id;
		$this->name_enterprise = $t_nam_ent;
		$this->address_enterprise = $t_add_ent;
		$this->city = $t_cit;
		$this->state = $t_sta;	
		$this->country = $t_cou;
		$this->pc = $t_pc;
		$this->line_business = $t_lin_bus;
		$this->name_contact = $t_nam_con;
		$this->phone_contact = $t_pho_con;
		$this->mail_contact = $t_mai_cont;
		$this->job_title_contatc = $t_job_con;
	}
	
	//Class's methods
	public function setId($temp) {
  		$this->id = $temp;
	}
	
	public function setNameEnterprise($temp) {
  		$this->name_enterprise = $temp;
	}
	
	public function setAddressEnterprise($temp) {
  		$this->address_enterprise = $temp;
	}
	
	public function setCity($temp) {
  		$this->city = $temp;
	}
	
	public function setState($temp) {
  		$this->state = $temp;
	}
	
	public function setPc($temp) {
  		$this->pc = $temp;
	}
	
	public function setLineBusiness($temp) {
  		$this->line_business = $temp;
	}
	
	public function setNameContact($temp) {
  		$this->name_contact = $temp;
	}
	
	public function setPhoneContact($temp) {
  		$this->phone_contact = $temp;
	}
	
	public function setMailContact($temp) {
  		$this->mail_contact = $temp;
	}
	
	public function setJobTitleContact($temp) {
  		$this->job_title_contact = $temp;
	}
	
	public function getId() {
  		return $this->id;
	}
	
	public function getNameEnterprise() {
  		return $this->name_enterprise;
	}
	
	public function getAddressEnterprise() {
  		return $this->address_enterprise;
	}
	
	public function getCity() {
  		return $this->city;
	}
	
	public function getState() {
  		return $this->state;
	}
	
	public function getCountry() {
  		return $this->country;
	}
	
	public function getPc() {
  		return $this->pc;
	}
	
	public function getLineBusiness() {
  		return $this->line_business;
	}
	
	public function getNameContact() {
  		return $this->name_contact;
	}
	
	public function getPhoneContact() {
  		return $this->phone_contact;
	}
	
	public function getMailContact() {
  		return $this->mail_contact;
	}
	
	public function getJobTitleContact() {
  		return $this->job_title_contact;
	}
}

?>