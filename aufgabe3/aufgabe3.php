<?php
session_start();


$_SESSION['username'] = $_GET['username'];

if (!isset($_Get['username'])) {
    echo ("Bitte zuerst einloggen");
}
if (isset($_SESSION['username'])) {
    $username = $_GET['username'];
    echo "<p>Hallo </p>" . "<p>" . $username . "</p>";
}
