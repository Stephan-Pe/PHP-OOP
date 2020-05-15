<?php

require_once "../dbconn/db.php";

echo DB::get()->getAttribute(PDO::ATTR_CONNECTION_STATUS);

$statement = DB::get()->query("SELECT * FROM task ORDER BY title LIMIT 100");
$all = $statement->fetchAll();


foreach ($all as $row) {
    //var_dump($row);
    $user = $row['user_id'];
    $title = $row['title'];
    echo "Task $user $title" . "<br>";
}


