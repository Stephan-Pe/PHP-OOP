<?php

class UsersView extends Users {

    public function showUser($name) {
        $results = $this->getUser($name);
        echo "Full name: " . $results[0]['name'] . " " . $results[0]['lastname'] . "<br>";
        echo "Username: " . $results[0]['username'] . " " . $results[0]['created'] . "<br>";
    }


}