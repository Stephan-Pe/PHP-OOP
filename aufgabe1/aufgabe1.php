<?php

require 'tasks.php';

foreach ($tasks as $index => $task) {
     echo ("Name " . $task['user'] . "status: " . $task['status'] . "Dauer:" . $task['description']);
}
