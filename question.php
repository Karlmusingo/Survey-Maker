<?php

session_start();
require_once 'include/functions.php';
require 'models/Question.php';
require 'models/Section.php';
require 'models/ReponseProposee.php';

if (isset($_GET['id_sondage'])) {
    $_SESSION['id_sondage'] = $_GET['id_sondage'];
}
//print_r($_SESSION);
$allQuestions = Question::selectForSondage($_SESSION['id_sondage']);

$sections = Section::select($_SESSION['id_sondage']);


if (!empty($_POST)) {
    extract($_POST);

    if (isset($_POST['question']) and ! empty($_POST['question'])) {


        if ($type_answer === 'text' OR $type_answer === 'number') {

            if (isset($_POST['parametre'])) {
                $questionId = Question::add_avec_param($question, $param_question, $param_reponse, $_SESSION['id_sondage'], $idSection);
            } else {
                $questionId = Question::add($question, $_SESSION['id_sondage'], $idSection);
            }
            $str_random = str_random(1000) . '_' . $questionId;
            $add = ReponseProposee::add($type_answer, $str_random, '', $questionId);
        } else {
            $flag = true;
            $number = count($_POST["answer"]);
            for ($index = 0; $index < $number; $index++) {
                if (empty($_POST["answer"][$index])) {
                    $flag = false;
                }
            }

            if ($flag) {
                if (isset($_POST['parametre'])) {
                    $questionId = Question::add_avec_param($question, $param_question, $param_reponse, $_SESSION['id_sondage'], $idSection);
                } else {
                    $questionId = Question::add($question, $_SESSION['id_sondage'], $idSection);
                }

                $str_random = str_random(1000) . '_' . $questionId;
                for ($i = 0; $i < $number; $i++) {
                    $add = ReponseProposee::add($type_answer, $str_random, $answer[$i], $questionId);
                }
            } else {
                die('Veillez remplir tous les champs de reponses à proposer'); // "Veillez remplir tous les champs de reponses à proposer";
            }
        }
    } else {
        $errors = "Veillez entrer la question";
    }
    //echo json_encode($errors);
}

require 'view/question.php';
