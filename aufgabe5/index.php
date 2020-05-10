<?php


class Todo
{
    // Properties recommended private so you can only access them 
    // with pubblic functions
    private $title;
    private $description;
    private $duedate;
    private $user;
    // Ctrl und $xxx anclicken zeigt alle verknüpfungen!
    // Variables which you want to access have to be declared in __construct($title, $description)
    public function __construct($title, $description, $duedate, $user)
    {
        // without $this no result
        $this->title = $title;
        $this->description = $description;
        $this->duedate = $duedate;
        $this->user = $user;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }
    // return function....
    public function getTitle()
    {
        return $this->title;
    }
    public function erledigen()
    {
        echo "Your Task $this->title erledigen! Und $this->description am $this->duedate Wer? $this->user";
    }
}

$newTitle = new Todo("Keller aufräumen, Auto waschen usw...", "Gründlich sein und ja nicht murren!", "2020.06.20", "Stephan");

echo $newTitle->erledigen();

echo "<br>";

echo $newTitle->getTitle();

echo "<br>";
echo "<br>";
// debugen
var_dump($newTitle);
