<?php
session_start();
// var_dump($_SESSION);
// die;

if(!$_SESSION['login']){
    header("location:../login/index.php");
    die;
}

