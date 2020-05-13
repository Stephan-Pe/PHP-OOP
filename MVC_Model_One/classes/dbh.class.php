<?php

class Dbh
{
    private $servername = "localhost";
    private $username = "root";
    private $pwd = "root";
    private $dbName = "todo_app";

    protected function connect()
    {
        $dsn = 'mysql:servername=' . $this->servername . ';dbname=' . $this->dbName;
        $pdo = new PDO($dsn, $this->username, $this->pwd);
        // Fetch_ASSOCiative Array.... allready included 
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}
