

<?php

    try {
        $bdd = new PDO("mysql:host=127.0.0.1; dbname=gestion_stock", "root", "");

        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        die("Erreur de connexion : " . $e->getmessage);
    }

   
