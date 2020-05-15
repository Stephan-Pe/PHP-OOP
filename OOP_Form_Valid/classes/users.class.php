<?php

class Users extends Dbh
{
    public function getUser()
    {
        $statement = DB::get()->query("SELECT * FROM task ORDER BY title LIMIT 100");
        $all = $statement->fetchAll();


        foreach ($all as $row) {
            var_dump($row);
            $user = $row['user_id'];
            $title = $row['title'];
            echo "Task $user $title" . "<br>";
        }
    }

    protected function setUser()
    {
        $query = "INSERT INTO user (id, username, password, name, lastname, created, updated) 
        VALUES (NULL, 'test@test.ch', 'test123', 'Test', 'User', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);";

        $num = DB::get()->exec($query);

        echo "Erfolgreich $num Benutzer erstellt mit id = " . DB::get()->lastInsertId();
    }
}

Users::getUser();
Users::setUser();