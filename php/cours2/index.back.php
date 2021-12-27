<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .impair {
            background-color: chartreuse;
        }
    </style>
</head>

<body>
    <?php

    echo '<table>';
    for ($i = 0; $i < 10; $i++) {
        // $class;
        // if ($i % 2) {
        //     $class = "impair";
        // } else {
        //     $class = "pair";
        // }
        $class = ($i % 2) ? "impair" : "pair";
        echo "<tr class='$class'><td>$i</td></tr>";
    }
    echo '</table>';
    ?>
</body>

</html>