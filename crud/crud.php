<?php
include("../modelo/connection.php");

class Crud extends Connection {

    public function __construct() {
        parent::__construct();
    }

    public function create($data) {
        $insert = $this->con->query($data);

        if ($insert) {
            return true;
        } else {
            echo "Error: " . $this->con->error;
            return false;
        }
    }

    public function read($data) {
        $view = $this->con->query($data);

        if ($view && $view->num_rows > 0) {
            return $view;
        } else {
            return null; // No hay resultados
        }
    }

    public function update($data) {
        $update = $this->con->query($data);

        if ($update) {
            return true;
        } else {
            echo "Error: " . $this->con->error;
            return false;
        }
    }

    public function delete($data) {
        $delete = $this->con->query($data);

        if ($delete) {
            return true;
        } else {
            echo "Error: " . $this->con->error;
            return false;
        }
    }
}
?>
