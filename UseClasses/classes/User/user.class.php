<?php

// Will only work when reference to User\User 
// And has to be in a named folder 
namespace User;

class User {
    // Properties recommended private so you can access them directly
    // can only access the public Methods
    private $name;
    private $lastname;
    private $age;
    private $Id;
    private $username;
    private $password;

    public static $userAge = 18;

    public function __construct($name, $lastname, $age, $Id, $username, $password) {
        // allways use $this parameter to point to the declared variables
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->Id = $Id;
        $this->username = $username;
        $this->password = $password;
    }
    // Methods
    public function setName($username) {
        // yes allways................
        $this->username = $username;
    }
    public function getName() {
        return $this->name. " " .$this->lastname. " " .$this->username . " " .$this->Id . " " .$this->password;
    }
    public function getUserAge() {
        // ScopeResolutionOperator
        return self::$userAge;
    }
    public static function setUserAge($newUA) {
        // ScopeResolutionOperator
        self::$userAge = $newUA;
    }


}