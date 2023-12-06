<?php

require_once ("DL/config.php");

class Database{

  // Propietat privada. Només podrem modificar-la des d'aquesta classe.
  private $conn;

  // Constructor. Farem que obri directament una connexió
  public function __construct ()
  {
      $this->conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);
  }

  // Mètode per fer consulta de tots els registres
  public function getAll ()
  {
      $sql = "SELECT id, name, surname, email, username, password   FROM raquelgrino_db";
      return ( $this->conn->query($sql) );
  }

  // Mètode per fer alta d'un registre
  public function insertUser ($name, $surname, $email, $username, $password)
  {
    $sql = "INSERT INTO raquelgrino_db (name, surname, email, username, password) VALUES ('$name, $surname, $email, $username, $password')";
    return  ( $this->conn->query($sql) );
  }

  public function getUserPasswd ($name, $surname, $email, $username, $password)
  {
    $sql = "INSERT INTO raquelgrino_db (name, surname, email, username, password) VALUES ('$name, $surname, $email, $username, $password')";
    return  ( $this->conn->query($sql) );
  }
}

?> 
