<?php


class Database {
    private $host = 'localhost';
    private $dbname = 'test';
    private $user = 'root';
    private $password = '';

    public function connect() : object {
        try {
            $pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname;", $this->user, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $th) {
            echo "Error to connect with database: " . $th->getMessage();
        }
    }
}


?>