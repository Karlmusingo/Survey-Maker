<?php

require 'include/bdd.php';
class ReponseMultiple {

    static function add($valeur, $reponseId) {

        global $bdd;

        $sql = "INSERT INTO reponse_multiple (valeur, reponse_id) VALUES (:valeur, :reponse_id)";
        $prepare = $bdd->prepare($sql);
        $prepare->execute([
            "valeur" => $valeur,
            "reponse_id" => $reponseId
        ]);

        return $bdd->lastInsertId();
    }
    
    static function select($questionId) {
        global $bdd;


        return $prepare->fetchAll();
    }

}

