<?php

class DB
{
    
    private static $CONN;

    public static function get()
    {
        $servername = "localhost";
        $db_name = "todo_app";
        $username = "root";
        $password = "root";



        if (!isset(DB::$CONN)) {
            try {
                DB::$CONN = new PDO("mysql:host=$servername;dbname=$db_name;charset=utf8", $username, $password);   // set the PDO error mode to exception   
                DB::$CONN->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Connected successfully";
                echo "<br>";
                echo "<br>";
            } catch (PDOException $e) {
                die("Connection failed: " . $e->getMessage());
            }
        }
        return DB::$CONN;
    }
}

DB::get();

echo DB::get()->getAttribute(PDO::ATTR_CONNECTION_STATUS);


