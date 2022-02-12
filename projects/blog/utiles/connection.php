<?php
function db_connection($host, $dbname, $login, $password)
{
    try {
        $dbh = new PDO(
            'mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8',
            $login,
            $password,
            array(PDO::ATTR_PERSISTENT => true)
        );
        $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $dbh;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

