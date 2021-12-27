<?php
// echo "抽签开头";
function random()
{
    // echo "抽签运行~";
    return mt_rand(1, 5);
}

echo "幸运数字：" . random();
