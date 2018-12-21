<?php

require 'include/bdd.php';

class Question {

    static function add($question, $sondageId, $sectionId) {

        global $bdd;

        $sql = "INSERT INTO question (question, sondage_id, section_id) VALUES (:question, :sondage_id, :section_id)";
        $prepare = $bdd->prepare($sql);
        $prepare->execute([
            "question" => $question,
            "sondage_id" => $sondageId,
            "section_id" => $sectionId
        ]);

        return $bdd->lastInsertId();
    }
    
    static function add_avec_param($question,$question_param, $reponse_param, $sondageId, $sectionId) {

        global $bdd;

        $sql = "INSERT INTO question (question,question_id_param, reponse_id_param, sondage_id, section_id) VALUES (:question,:question_id_param, :reponse_id_param, :sondage_id, :section_id)";
        $prepare = $bdd->prepare($sql);
        $prepare->execute([
            "question" => $question,
            "question_id_param" => $question_param,
            "reponse_id_param" => $reponse_param,
            "sondage_id" => $sondageId,
            "section_id" => $sectionId
        ]);

        return $bdd->lastInsertId();
    }

    static function select($sectionId) {
        global $bdd;

        $sql = "SELECT * FROM question WHERE section_id=:section_id";
        $prepare = $bdd->prepare($sql);
        $prepare->execute([
            "section_id" => $sectionId
        ]);

        return $prepare->fetchAll();
    }
    
    static function selectForSondage($sondageId) {
        global $bdd;

        $sql = "SELECT * FROM question WHERE sondage_id=:sondage_id";
        $prepare = $bdd->prepare($sql);
        $prepare->execute([
            "sondage_id" => $sondageId
        ]);

        return $prepare->fetchAll();
    }
}   