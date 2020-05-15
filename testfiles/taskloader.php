<?php
require_once('../dbc/db.php');

class TaskLoader
{


    public function getAll()
    {   //prepare statemant saver than query
        $statement = DB::get()->prepare("SELECT * FROM task LIMIT 100");
        $statement->execute();
        // ausführen mit Fetch_Assoc
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getOneById($id)
    {
        // prepare mit named Parameter ':id' => $id
        $statement = DB::get()->prepare("SELECT * FROM task WHERE id = $id ;");
        $statement->execute([':id' => $id]);
        // $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        if (!empty($result)) {
            return $result;
        } else {
            return null;
        }
    }
}
