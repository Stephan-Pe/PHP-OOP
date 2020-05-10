<?php
include 'pdo.dbconn.php';

class Something extends Dbh
{

    public function getUsers()
    {
        $sql  = "SELECT * FROM user";
        $statement = $this->connect()->query($sql);
        while ($row = $statement->fetch()) {
            echo $row['usersname'];
        }
    }
    public function getUsersStmt($username, $lastname)
    {
        $sql  = "SELECT * FROM user WHERE name = ? AND lastname = ?";
        $statement = $this->connect()->prepare($sql);
        $statement->execute([$username, $lastname]);
        $names = $statement->fetchAll();


        foreach($names as $name) {
            echo $name['name'] . " " . $name['lastname'];
        }
    }
}


$someObject = new Something();
$someObject->getUsersStmt("Stephan", "Petersen");