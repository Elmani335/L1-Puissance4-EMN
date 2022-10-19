<?php

spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

// Instance les objets

$maisonDeElman = new Maison();
$maisonDePierre = new Maison();
$maisonDeJean = new Maison();

session_start();
?>

<DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP P.O.O.</title>
</head>
<body>
    <h1>test methode</h1>
    <?php
    echo $maisonDeElman->ouvrirFenetre();
    ?>
    <h1>Test perso vie</h1>
    <?php
    $perso1 = new Personnage(100, 110, 10);
    $perso2 = new Personnage(100, 10, 10);
    ?>
    <p>Le personnage 1 a
        <?php echo $perso1->getVie(); ?> points de vie.
        <?php echo $perso1->getForce(); ?> points de force.
        <?php echo $perso1->getDef(); ?> points de def.
    </p>
    <p>Le personnage 2 a
        <?php echo $perso2->getVie(); ?> points de vie.
        <?php echo $perso2->getForce(); ?> points de force.
        <?php echo $perso2->getDef(); ?> points de def.
    </p>
    <?php $perso1->frapper($perso2); echo 'avec une force de :';  ?>
    <p>Le personnage 1 a frappé le personnage 2</p>
    <p>Le personnage 2 a maintenant <?php echo $perso2->getVie();?> points de vie
        <?php
    if ($perso2->getVie() <= 0) {
        echo ' - Le personnage 2 est mort';
    }
    else {
        echo ' - Le personnage 2 est vivant';
    }
    ?>
    </p>
    <p>Le personnage 1 a maintenant <?php echo $perso1->getVie(); ?> points de vie
        <?php
        if ($perso1->getVie() <= 0) {
            echo 'Le personnage 1 est mort';
        }
        else {
            echo ' - Le personnage 1 est vivant';
        }
        ?>
    </p>

</body>
</html>


