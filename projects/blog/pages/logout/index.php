<?php
session_start();
session_unset();
session_destroy();
echo "退出成功-3s后跳转";
header("refresh:3;url=../../index.php");
