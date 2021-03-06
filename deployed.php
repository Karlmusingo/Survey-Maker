<?php

require 'models/Question.php';
require 'models/Reponse.php';
require 'models/ReponseProposee.php';
require 'models/Section.php';
require 'models/Sondage.php';
require 'models/ReponseMultiple.php';
require 'include/functions.php';

$sondage = Sondage::selectToRespond($_GET['id_sondage']);
$sections = section_question_reponse($_GET['id_sondage']);

//extract($_POST);

if (isset($_POST['repondre'])) {

    foreach ($_POST as $cle => $reponse) {
        if (!is_array($_POST[$cle])) {

            if ($cle != 'repondre' AND $reponse != 'repondre') {
                $questionId = ReponseProposee::selectIdQuestion($cle);
                Reponse::add($reponse, $questionId);
            }
        } else {

            $questionId = ReponseProposee::selectIdQuestion($cle);
            $addWithoutResponse = Reponse::addWithoutResponse($questionId);
            foreach ($_POST[$cle] as $valeur) {
                ReponseMultiple::add($valeur, $addWithoutResponse);
            }
        }
    }
}

require_once 'view/deployed.php';
