
<?php

class data_base
{
	private $server ="localhost";
	//You need to modify with you parameters
	private	$user ="root";
	private $password ="toor";
	private $database ="jr_enterprise";
	
	private $connection;
	
	public function connect(){ 
			$this->connection = mysql_connect($this->server,$this->user,$this->password) or die(mysql_error());
			mysql_select_db($this->database, $this->connection) or die(mysql_error());
  	}
	
	public function getConnection(){ 
			return $this->connection;
  	}

	/**
	* Release database connection link.
	*/
	public function close() {
			mysql_close( $this->connection );
	}
}
	
?>
