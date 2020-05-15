<?php

require_once("../dbc/db.php");

echo "<h1>Fetch Beispiele</h1>";
//prepared statement 
$statement = DB::get()->prepare("SELECT * FROM task WHERE id BETWEEN :start AND :end");

//ausführen mit PDO::FETCH_NUM 

$statement->execute(array(':start' => 0, ':end' => 3));
$data = $statement->fetchAll(PDO::FETCH_NUM);
echo '<h2>PDO::FETCH_NUM</h2>';
print_array($data);

/** Funktion die einen Array schön darstellt */

//ausführen mit PDO::FETCH_ASSOC … 

$statement->execute(array(':start' => 0, ':end' => 3));
$data = $statement->fetchAll(PDO::FETCH_ASSOC);
echo '<h2>PDO::FETCH_ASSOC</h2>';
print_array($data);

//ausführen mit PDO::FETCH_BOTH … 

$statement->execute(array(':start' => 0, ':end' => 3));
$data = $statement->fetchAll(PDO::FETCH_BOTH);
echo '<h2>PDO::FETCH_BOTH</h2>';
print_array($data);

//ausführen mit PDO::FETCH_OBJ

$statement->execute(array(':start' => 0, ':end' => 3));
$data = $statement->fetchAll(PDO::FETCH_OBJ);
echo '<h2>PDO::FETCH_OB</h2>';
print_array($data);

function print_array($data)
{
    echo '<pre>' . print_r($data, true) . '</pre>';
}




