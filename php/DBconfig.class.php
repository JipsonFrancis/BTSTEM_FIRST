<?php

class DBconfig{
    private $dbHost = "localhost";
    private $dbUser = "root";
    private $dbPassword = "";
    private $dbName = "mydb";
    private $conn; 

    protected function connect(){
        try {
            $dsn = "mysql:host=" . $this->dbHost . ";dbname=" . $this->dbName;
            $this->conn = new PDO($dsn, $this->dbUser, $this->dbPassword);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $this->conn;
          } catch(PDOException $e) {
            die("DB Connection failed: " . $e->getMessage());
          }
    }
}