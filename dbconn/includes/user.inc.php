<?php
// extends includes the dbh.inc.php connection
class User extends Dbh {


    protected function getAllUsers() {
       $sql = "SELECT * FROM users";
       $result = $this->connect()->query($sql);
       $numRows = $result->num_rows;
       if ($numRows > 0) {
           // with PDO connection to database fetch_assoc is already done
           while ($row = $result->fetch_assoc()) {
               $data[] = $row;
           }
           return $data;
       }
    }

}