<?php

declare(strict_types =1);
include 'class-autoload.inc.php';

$oper = $_POST["operator"];
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
// variables inside brackets have to be declared by type->(int)$num1 otherwise you get error
$calc = new Calc($oper, (int)$num1, (int)$num2);

try {
    echo "<h2>" . $calc->calculator() ."</h2>";
} catch (TypeError $e) {
    echo "Error!: " . $e->getMessage();
}