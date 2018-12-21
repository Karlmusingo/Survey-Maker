<?php

function str_random($length) {
    $string = 'azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN0123456789';

    return substr(str_shuffle(str_repeat($string, $length)), 0, 5);
}

function question_reponse($idSection) {
    $questions = Question::select($idSection);

    $rows = array();
    foreach ($questions as $question) {
        $rows[$question->id_question] = $question;

        $reponses = ReponseProposee::select($question->id_question);
        foreach ($reponses as $reponse) {
            $rows[$question->id_question]->reponses[] = $reponse;
        }
    }
    return $rows;
}

function section_question_reponse($idSondage){
    $sections = Section::select($idSondage);
    
    $rows = array();
    foreach ($sections as $section) {
        $rows[$section->id_section] = $section;
        $rows[$section->id_section]->questions[] = question_reponse($section->id_section);
    }
    return $rows;
}

function question_reponse_nombre($idSection){
    $questions = Question::select($idSection);
    
    $rows = array();
    foreach ($questions as $question) {
        $rows[$question->id_question] = $question;

        $reponses = Reponse::select($question->id_question);
        foreach ($reponses as $reponse) {
            $rows[$question->id_question]->reponses[] = $reponse;
        }
    }
    return $rows;
}

function section_question_reponse_nombre($idSondage){
    $sections = Section::select($idSondage);
    $rows = array();
    foreach ($sections as $section) {
        $rows[$section->id_section] = $section;
        $rows[$section->id_section]->questions[] = question_reponse_nombre($section->id_section);
    }      
    return $rows;
}
