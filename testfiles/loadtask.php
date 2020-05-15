<?php
require_once('taskloader.php');

/** Funktion die einen Array schön darstellt */

function print_array($array)
{
    echo '<pre>' . print_r($array, true) . '</pre>';
}
$taskLoader = new TaskLoader();
echo '<h2>print one task</h2>';
print_array($taskLoader->getOneById(22));
echo '<h2>print all task</h2>';
print_array($taskLoader->getAll());
