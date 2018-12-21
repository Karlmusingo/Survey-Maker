<?php
session_start();
require 'include/bdd.php';
require 'models/User.php';
if (isset($_SESSION['nom'])) {
    header("location:sondage?message=1");
}

if (isset($_POST['inscrire'])) {
    if (isset($_POST['nom']) AND isset($_POST['email']) AND isset($_POST['telephone']) AND isset($_POST['password']) AND isset($_POST['confirm'])) {
        if (!empty($_POST['nom']) AND ! empty($_POST['email']) AND ! empty($_POST['telephone']) AND ! empty($_POST['password']) AND ! empty($_POST['confirm'])) {
            extract($_POST);
            if ($password == $confirm) {
                
                User::add($nom, $email, $telephone, $type, md5($password));
                $_SESSION['nom'] = $nom;
                $_SESSION['id_user'] = $bdd->lastInsertId();
                header("location:sondage?id_user=".$_SESSION['id']);
                
            } else {
                $error = 'les passwords ne correspondent pas';
            }
        }else{
            $error = 'tous les champs sont obligatoires';
        }
    }
}

require 'view/user.php';