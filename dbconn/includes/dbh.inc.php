<?php

class Dbh {

    private $servername;
    private $username;
    private $password;
    private $dbname;

    protected function connect() {
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "root";
        $this->dbname = "loginsystempe";

        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        return $conn;
    }

}