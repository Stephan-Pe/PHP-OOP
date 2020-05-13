<?php
include 'includes/class-autoload.inc.php';
?>
<!DOCTYPE html>
<link rel="stylesheet" href="main.css">
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>


    <?php
    $userObj = new UsersView();
    $userObj->showUser("Stephan");

    // $newUser = new UsersContr();
    // $newUser->createUser("heiri123", "123heiri", "Heiri", "Gabatueler", "2020-05-11", "2020-05-11");
    ?>
</body>

</html>