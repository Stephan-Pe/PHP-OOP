<?php

require_once "../dbconn/db.php";

$statement = DB::get()->query("SELECT * FROM task ORDER BY title LIMIT 100");
$all = $statement->fetchAll();


foreach ($all as $row) {
    //var_dump($row);
    $user = $row['user_id'];
    $title = $row['title'];
    echo "Task $user $title" . "<br>";
}


// class ViewUser extends User {


//     public function showAllUsers() {
//         $datas = $this->getAllUsers();
//         foreach ($datas as $data) {
//             echo $data['username']."<br>";
//             echo $data['name']."<br>";
//         }
//     }
// }

// $users = new ViewUser();
// $users->showAllUsers();
