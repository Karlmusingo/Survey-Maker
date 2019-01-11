<?php 
session_start();
require 'include/bdd.php';
require 'models/Sondage.php';
require 'models/Section.php';
require 'models/Question.php';
require 'models/Reponse.php';
require 'models/ReponseMultiple.php';
require 'include/functions.php';

$nombre = Reponse::get_number_reponse($_SESSION['id_sondage']);

$sections = section_question_reponse_nombre($_SESSION['id_sondage']);



require 'view/resultat.php';
?>