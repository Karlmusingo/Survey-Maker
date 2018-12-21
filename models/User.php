<?php

require 'include/bdd.php';

class User {

    //ajouter utilisateur

    static function add($nom, $email, $telephone, $type, $password) {
        global $bdd;

        $sql = "INSERT INTO user (nom, email, telephone, type, password) VALUES (:nom, :email, :telephone, :type, :password)";
        $prepare = $bdd->prepare($sql);
        $prepare->execute([
            "nom" => $nom,
            "email" => $email,
            "telephone" => $telephone,
            "type" => $type,
            "password" => $password
        ]);

        return true;
    }

    static function select($nom, $password) {
        global $bdd;

        $sql = "SELECT id_user, nom, password FROM user WHERE nom = :nom AND password = :password";

        $prepare = $bdd->prepare($sql);
        $prepare->execute([
            "nom" => $nom,
            "password" => $password
        ]);

        $fetchAll = $prepare->fetchAll();
        foreach ($fetchAll as $fetch) {
            if ($fetch->nom == $nom AND $fetch->password == $password) {
                return $fetch->id_user;
            } else {
                return FALSE;
            }
        }
        //return $fetchAll;
    }

}
