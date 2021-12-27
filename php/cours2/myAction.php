<?php
include_once "./utils.php";
// random();
// $email = $_POST["email"];
// echo $random();
// myLogger($_GET);

// $action = $_POST["action"];
// if ($action === 'add') {
//     echo " 添加";
//     // bdd 
//     die();
// }

// if ($action === 'del') {
//     echo " 删除";
//     // bdd->$action();
//     die();
// }

// if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
//     echo $email;
// } else {
//     echo "email 不合法";
// }

// echo filter_var($action, FILTER_VALIDATE_INT);

// echo nl2br($_POST['nom']);
myLogger($_POST["langages"]);
foreach ($_POST["langages"] as $element) {
    echo ('La case ' . $element . 'a ete cochee <br>');
}
