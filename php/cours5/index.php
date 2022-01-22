<?php
// session_start();

// setcookie("abc", "edf");

// $_SESSION["login"] = true;
// echo $_SESSION["abc"];

// unset($_SESSION);
// session_destroy();
// echo "session_destroy";

// echo $_SESSION;

// echo password_hash("toto", PASSWORD_DEFAULT);

// $rawInput = 123456;

// $serverPrivate = md5("JEnesaipas^@#$@#$");
// echo md5($rawInput . $serverPrivate);

// $password = $_POST["password"];

// if (md5($password + $myKey) == "e10adc3949ba59abbe56e057f20f883e") {
//     echo "ok";
// }

// 自动运行 自动寻找
spl_autoload_register(function ($class) {
    echo "spl_autoload_register 里面寻找 =>$class<br/>";
    // var_dump($class);
    include 'classes/' . $class . '.php';
});

$p1 = new Person("nihao");

// echo "结果 =>" . class_exists("test");
echo __CLASS__;

// var_dump($p1);

// function afficher($person)
// {
//     echo $person->getName();
// }

// afficher($p1);
// $p1->setName("不知道");
// afficher($p1);
