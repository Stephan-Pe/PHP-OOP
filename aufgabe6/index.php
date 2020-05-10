<?php
// set Timezone
date_default_timezone_set("Europe/Berlin");

class User
{
    // Properties recommended private so you can only access them 
    // with pubblic functions
    private $name;
    private $created;

    // Ctrl und $xxx anclicken zeigt alle verknüpfungen!
    // Variables which you want to access have to be declared in __construct($title, $description)
    public function __construct($name, $created = NULL)
    {
        if ($created == NULL) {
            $created = time();
        }
        // without $this no result
        $this->name = $name;
        $this->created = $created;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    // return function....
    public function getName()
    {
        return $this->name;
    }
    public function getInformaton()
    {
        sleep(5);
        // convert timestamp to date
        $datum = date("d.m.Y H:i:s", $this->created);
        echo "Der Benutzer: $this->name wurde erstellt am: $datum ";
    }
}

$user = new User("Stephan", 199224999);
// alternative you can do like this
// $user = new User();
// $user->setName("Theodor-August");

echo $user->getInformaton();

echo "<br>";
echo "<br>";

// debugen
var_dump($user);
