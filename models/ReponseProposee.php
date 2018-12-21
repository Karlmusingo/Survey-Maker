<?php

require 'include/bdd.php';

class ReponseProposee {

    static function add($type, $cle, $valeur, $questionId) {

        global $bdd;

        $sql = "INSERT INTO reponse_proposee (type, cle, valeur, question_id) VALUES (:type, :cle, :valeur, :question_id)";
        $prepare = $bdd->prepare($sql);
        $prepare->execute([
            "type" => $type,
            "cle" => $cle,
            "valeur" => $valeur,
            "question_id" => $questionId
        ]);

        return $bdd->lastInsertId();
    }

    static function select($questionId) {
        global $bdd;

        $sql = "SELECT * FROM reponse_proposee WHERE question_id=:question_id";
        $prepare = $bdd->prepare($sql);
        $prepare->execute([
            "question_id" => $questionId
        ]);

        return $prepare->fetchAll();
    }

    static function selectIdQuestion($key) {
        global $bdd;

        $sql = "SELECT question_id FROM reponse_proposee WHERE cle=:cle";
        $prepare = $bdd->prepare($sql);
        $prepare->execute([
            "cle" => $key
        ]);
        $question_id = $prepare->fetch();

        return $question_id->question_id;
    }

}
