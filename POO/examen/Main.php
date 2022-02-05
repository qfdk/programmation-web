<?php
spl_autoload_register(function ($class) {
    // var_dump($class);
    include $class . '.php';
});

$qt=new Personne("88888","邱天");
$lieu=new Site("Toulon","8 rue");
$visite=new Visite("77777","06/02/2022","00:27",$qt,$lieu);
$visite2=new Visite("78978","08/02/2022","00:97",$qt,$lieu);

$qt->ajouterVisite($visite);
$qt->ajouterVisite($visite2);
echo $qt;
