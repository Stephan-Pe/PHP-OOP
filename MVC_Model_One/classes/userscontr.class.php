<?php

class UsersContr extends Users
{

    public function createUser($username, $pwd, $name, $lastname, $created, $updated)
    {
        $this->setUser($username, $pwd, $name, $lastname, $created, $updated);
    }
}
