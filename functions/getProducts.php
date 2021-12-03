<?php

include("selectedDatabaseCrud.php");

class getProducts {
  private $dbhost = "localhost";
  private $dbname = "wideworldimporters";
  private $username = "root";
  private $password = "";
  private $db;

  public function __construct() {
    $this->db = new database($this->dbhost = "localhost", $this->dbname = "wideworldimporters", $this->username = "root", $this->password = "");
  }

  public function listProducts() {
    return $this->db->Select('select * FROM stockItems');
  }
}
?>