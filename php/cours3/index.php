<?php
require_once "./connexion.php";
function myLogger($data)
{
    echo "<pre>";
    print_r($data);
    echo  "</pre>";
}

$dbh = db_connection("127.0.0.1", "php", "root", "root");

$sth = $dbh->prepare("SELECT name, colour FROM fruit");
$sth->execute();

$result = $sth->fetchAll();
myLogger($result);

echo count($result);
