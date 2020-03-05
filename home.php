<?php 
session_start();
//require 'pages/database.php';
require 'include/bdd.php';
require 'models/Sondage.php';
require 'models/Section.php';
require 'models/Question.php';
require 'models/Reponse.php';
require 'include/functions.php';


        global $bdd;
        $sondages = Sondage::selectForMe($_SESSION['id_user']);
        foreach ($sondages as $sondage) {
            $_SESSION['id_sondage'] = $sondage->id_sondage;
            $_SESSION['nom_sondage'] = $sondage->nom;
            $_SESSION['statut'] = $sondage->statut;
            
            break;
        }
        $nombre = Reponse::get_number_reponse($_SESSION['id_sondage']);
       
        $sections = section_question_reponse_nombre($_SESSION['id_sondage']);
     
        require_once 'view/home.php';
        require_once 'js/morris-data.php'; 
        
        
 ?>


