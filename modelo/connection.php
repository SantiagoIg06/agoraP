<?php
class Connection {
    public $host;
    public $user;
    public $pass;
    public $dbname;
    public $con;
    public $message;

    public function __construct() {
        $this->db_connect();
    }

    public function db_connect() {
        $this->host = 'localhost';
        $this->user = 'root';
        $this->pass = ''; // Contraseña de tu base de datos, si la tienes
        $this->dbname = 'agoraP';
        $this->con = new mysqli($this->host, $this->user, $this->pass, $this->dbname);

        if ($this->con->connect_error) {
            die("Connection failed: " . $this->con->connect_error);
        } else {
            $this->message = "Connected Successfully...";
        }
    }
}
?>
