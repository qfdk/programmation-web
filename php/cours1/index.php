<?php
$a; // a est de type NULL
$a = 1; // a est un entier
$a = 1.2; // a est un double
$a = "toto"; // a est une chaine
$a = 0xa3; // 十六进制
$a = array(1.5, "aaaa", true, "toto" => "0x14");


var_dump($a["toto"]);
echo "<br/>----------------<br/>";
print_r($a["toto"]);

echo "<br/>-------isset unset测试 ---------<br/>";

$toto;

if (isset($toto)) {
    echo "<br/>toto set 了,unset<br/>";
    unset($toto);
} else {
    echo "<br/>toto 没有设置<br/>";
    $toto = "toto";
}

echo "toto的值： " . $toto;

/**
 * 交换两数
 */
function swap3(&$x, &$y)
{
    $tmp = $x;
    $x = $y;
    $y = $tmp;
}

// 尽量不要这么写
// $toto = "annee";
// ${$toto} = 2007;
// echo $annee; // $annee vaut 2007

$a = 10;
$b = 20;
$c = $a + $b;
echo "la somme de $a et de $b vaut $c <br>";

echo "<br/>----------------<br/>";
// $texte = 'Super le PHP';
// echo $texte[0]; // depuis php5 echo ord('A');
// echo chr(72);

echo "a;sldjf	&nbsp;	&nbsp;&gt;	&nbsp;;alsk";
// printf('%.2f %s %03.4f', 1, 'bonjour', 1.0);

$persons = array(
    "0你好" => "星期天",
    "我1" => "星期一",
    "2你" => "星期二",
    "好3" => "77100"
);


// for (const p of persons) {
//     console.log(p)
// }
?>
<table border='1'>
    <thead>
        <tr>
            <th colspan="1">The table header</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($persons as $person) {
            echo "<tr>";
            echo "<td>$person </td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>


<?php
/* valeurs et clefs      */
foreach ($persons as $key => $value) {
    echo "Clef : $key Valeur : $value<br />\n";
}

define("JAUNE", "#FFFF00");

echo ("你好 " . JAUNE . "！！！");
?>
