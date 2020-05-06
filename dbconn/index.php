<?php
    include 'includes/class-autoload.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB-Connection</title>
</head>
<body>
    <?php
        $users = new ViewUser();
        $users->showAllUsers();
    ?>
    
</body>
</html>