<?php

class Users extends Dbh
{

    protected function getUser($name)
    {
        $sql = "SELECT * FROM user WHERE name = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]);

        $results = $stmt->fetchAll();
        return $results;
    }

    protected function setUser($username, $pwd, $name, $lastname, $created, $updated)
    {
        $sql = "INSERT INTO user(username, password, name, lastname, created, updated) VALUES (?,?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$username, $pwd, $name, $lastname, $created, $updated]);
    }
}
