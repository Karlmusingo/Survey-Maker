<?php

require 'models/Question.php';
require 'models/ReponseProposee.php';
require 'include/functions.php';

if (isset($_GET['idSection'])) {
    $question_reponse = question_reponse($_GET['idSection']);
//echo result as json
    echo json_encode($question_reponse);

}
if(isset($_GET['selected_id'])){
    $selectReponses = ReponseProposee::select($_GET['selected_id']);
    echo json_encode($selectReponses);
}

if(isset($_GET['sondage_id'])){
    $allQuestions = Question::selectForSondage($_GET['sondage_id']);
    echo json_encode($allQuestions);
}

?>