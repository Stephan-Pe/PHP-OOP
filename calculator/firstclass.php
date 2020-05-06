<?php

include 'includes/class-autoload.inc.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
            User\User::setUserAge(21);
            echo User\User::$userAge;
        ?>
        <?php
            $user1 = new User\User("Stephan", "Petersen", 57, 1, "fellowjiister", "xxxxxxx");
            echo "<h4>";
            echo $user1->getName();
            echo "</h4>";
            echo $user1->getUserAge();
            $home1 = new Adress("Mainstreet", "Mainhattan", 6666);
            echo "<h4>";
            echo $home1->getZip();
            echo "</h4>";

        ?>
</body>
</html>