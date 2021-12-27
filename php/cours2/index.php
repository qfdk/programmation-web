<?php
// $s = "bonjour";
// $a = ($b = 4) + 5;
// echo $a;

// $b = "Bonjour ";
// $b .= " tout le monde!";

// echo $b;

// if (1 > 0) {
//     echo "1";
//     echo "2";
// }

function onePlusN($n)
{
    return 1 + $n;
}

// $res = onePlusN(99);

// echo $res;

// function change()
// {
//     static $var = 0; // definit $var comme statique
//     $var++;
//     echo $var;
// }
// change();
// change();
// change();

// include_once dirname(__FILE__) . '/utils.php';
// require_once './utils.php';

// change();
// echo random();
// $a = $_POST["test"];

// $inlcude = $_GET["qiu"];

// if ($inlcude === "qiu") {
//     include_once dirname(__FILE__) . '/test/utils1.php';
// } else {
include_once dirname(__FILE__) . '/utils.php';
// }

echo random();
?>
<form action="myAction.php" method="post">
    <!--le formulaire-->
    <fieldset>
        <legend><b>Identite</b></legend>
        <label for="el1">Email</label> :
        <input id="el1" type="email" name="email" />
        <label for="el2">Action</label> :
        <input id="el2" type=text name="action" />
        <input type="submit" value="发送！！！">
    </fieldset>
</form>

<form method="post" action="myAction.php">
    <fieldset>
        <legend><b>Enregistrement</b></legend>
        <label>Titre</label>
        <input type="text" name="titre">
        <label>Contenu</label>
        <input type="hidden" name="nom" value="ghost" />
        <textarea rows="5" name="contenu"></textarea>
    </fieldset>
    <button type="submit" name="accepter">
        ENVOYER
    </button>
</form>

<form method="post" action="myAction.php">
    <legend> Quel (s) langage (s) utilisez vous ?</legend>
    <input type="checkbox" name="langages[]" value="C"> C
    <input type="checkbox" name="langages[]" value="PHP"> PHP
    <input type="checkbox" name="langages[]" value="JS"> JS
    <input type="checkbox" name="langages[]" value="JAVA"> JAVA
    <button type="submit">
        Validez
    </button>
</form>

<form action="myAction.php" method="post">
    Qui etait Pythagore ?
    <input type="radio" name="langages" value=1>
    Un realisateur de film d'horreur.
    <input type="radio" name="langages" value=2>
    Un mathematicien grec.
    <input type="radio" name="langages" value=3>
    Un danseur mondain
    <input type=submit value=valider>
</form>

<form action="traiter.php" method=post>
    Quel est votre langage prefere ?
    <select name="langage">
        <option value=1>C</option>
        <option value=2>PHP</option>
        <option value=3>Bash</option>
        <option value=4>Assembleur Mips</option>
    </select>
    <input type=submit value=Valider>
</form>

<form enctype="multipart/form-data" action="fileupload.php" method="post">
    <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
    Transfere le fichier <input type="file" name="monfichier" />
    <input type="submit" />
</form>