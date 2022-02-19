<?php
session_start();

$username = $_POST["username"];
$password = $_POST["password"];

if (strlen($username) != 0 && strlen($password) != 0) {
    if ($username == "admin" && $password == "q") {
        $_SESSION['login'] = true;
        header("location:../article/index.php");
        die;
    }
}
header("location:index.php");
