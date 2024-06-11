<?php


/* Connecting to database */

class Connection
{
 public $host;
 public $user;
 public $pass;
 public $dbname;
 public $con;
 public $message;
 
 public function __construct()
 {
	return $this->db_connect();
 }
 
 public function db_connect()
 {
	$this->host = 'localhost:3306';
	$this->user = 'root';
	$this->pass = ''; 
	$this->dbname = 'agoraP'; 
	$this->con = new mysqli($this->host,$this->user,$this->pass,$this->dbname) or mysqli_error();
	
	if(!$this->con)
	{
		 $this->message = "Some problem with connection...";
	}
	else
	{
		 $this->message = "Connected Succesfully...";
	}
 }
}
?>
