<?php
require_once('../../utiles/security.php');
require_once('../../utiles/connection.php');
$dbh = db_connection("php.qfdk.me", "php", "php", "php2*2*");

$sth = $dbh->prepare("INSERT INTO article(title, content)VALUES(:title,:content)");
$sth->execute(array(
    ":title" => $_POST['title'],
    ":content" => $_POST['content']
));

header('Location: ../../index.php');
