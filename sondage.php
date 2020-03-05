<?php

session_start();

require 'include/bdd.php';
include 'models/Sondage.php';

$sondages = Sondage::selectForMe($_SESSION['id_user']);

if (isset($_GET['id_sondage'])) {
    $_SESSION['id_sondage'] = $_GET['id_sondage'];
}elseif (isset($_POST['next'])) {
    if (isset($_SESSION['id_user']) AND $_POST['nom'] AND $_POST['description']) {

        extract($_POST);
        Sondage::add($nom, $description, $_SESSION['id_user']);

        $_SESSION['id_sondage'] = $bdd->lastInsertId();
        header("location:section?id_sondage=" . $_SESSION['id_sondage']);
    } else {
        print_r($_SESSION);
        echo '<br/>';
        print_r($_POST);
    }
}

require 'view/sondage.php';


