<?php

class database
{
  private $connection = null;

  public function __construct($dbhost = "", $dbname = "", $username = "", $password = "") {
    try {
      $this->connection = new PDO("mysql:host={$dbhost};dbname={$dbname};", $username, $password);
      $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }catch (Exception $error) {
      throw new Exception($error->getMessage());
    }
  }

  public function Insert($statement = "", $parameters = []) {
    try {
      $this->executeStatement($statement, $parameters);
    } catch (Exception $error) {
      throw new Exception($error->getMessage());
    }
  }
  public function Select($statement = "", $parameters = []) {
    try {
      $statement = $this->executeStatement($statement, $parameters);

      return $statement->fetchAll();
    } catch (Exception $error) {
      throw new Exception($error->getMessage());
    }
  }
  public function Update() {
  }
  public function Remove() {
  }
  private function executeStatement($statement = "", $parameters = []) {
    try{

      $stmt = $this->connection->prepare($statement);
      $stmt->execute($parameters);
      return $stmt;

    }catch(Exception $error){
      throw new Exception($error->getMessage());
    }
  }
}
