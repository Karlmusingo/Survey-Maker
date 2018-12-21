<?php
session_start();

require 'models/Section.php';
if (isset($_POST['next'])) {
    extract($_GET);
    $number = count($_POST["section"]);
    $flag = true;
    extract($_POST);

    for ($index = 0; $index < $number; $index++) {
        if (trim($section[$index]) == '') {
            $flag = false;
        }
    }
    if ($flag) {
        for ($i = 0; $i < $number; $i++) {
            $add = Section::add($section[$i],$_SESSION['id_sondage']);
        }
        header('location:question.php');
    } else {
        $err = "Please Enter all the sections";
    }
    
}

require_once 'view/section.php';
