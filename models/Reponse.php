<?php

require 'include/bdd.php';

class Reponse {

    static function add($reponse, $questionId) {

        global $bdd;

        $sql = "INSERT INTO reponse (reponse, question_id) VALUES (:reponse, :question_id)";
        $prepare = $bdd->prepare($sql);
        $prepare->execute([
            "reponse" => $reponse,
            "question_id" => $questionId
        ]);

        return $bdd->lastInsertId();
    }

    static function addWithoutResponse($questionId) {

        global $bdd;

        $sql = "INSERT INTO reponse (question_id) VALUES ( :question_id)";
        $prepare = $bdd->prepare($sql);
        $prepare->execute([
            "question_id" => $questionId
        ]);

        return $bdd->lastInsertId();
    }

    static function select($questionId) {
        global $bdd;

        $sql = "SELECT reponse, COUNT(reponse) AS nombre FROM reponse WHERE question_id=:question_id GROUP BY reponse";
        $prepare = $bdd->prepare($sql);
        $prepare->execute([
            "question_id" => $questionId
        ]);
        return $prepare->fetchAll();
    }
    
    static function get_number_reponse($sondageId){
        global $bdd;
        
        $sql = "SELECT COUNT(question_id) AS nombre FROM reponse WHERE question_id IN (SELECT MIN(id_question) FROM question WHERE sondage_id=:sondage_id)";
        $prepare = $bdd->prepare($sql);
        $prepare->execute([
            "sondage_id" => $sondageId
        ]);
      
        return $prepare->fetch();
    }

}
