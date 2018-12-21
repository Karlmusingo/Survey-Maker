<?php
class Sondage {
   
    static function add($nom, $description, $userId) {
        
        global $bdd;
        $sql = "INSERT INTO sondage (nom, description, user_id) VALUES (:nom, :description, :user_id)";
        $prepare = $bdd->prepare($sql);
        $prepare->execute([
            "nom"=>$nom,
            "description"=>$description,
            "user_id"=>$userId
        ]);
        
        return true;    
        
    }
    
    static function update($statut, $idSondage) {
        
        global $bdd;
        $sql = "UPDATE sondage SET statut=:statut WHERE id_sondage=:id_sondage";
        $prepare = $bdd->prepare($sql);
        $prepare->execute([
            "statut"=>$statut,
            "id_sondage"=>$idSondage
        ]);
        
        return true;    
        
    }
    
    static function selectToRespond($idSondage) {
        
        global $bdd;
        $sql = "SELECT * FROM sondage WHERE id_sondage=:id_sondage";
        $prepare = $bdd->prepare($sql);
        $prepare->execute([
            'id_sondage'=>$idSondage
        ]);
        $fetch = $prepare->fetch();
        return $fetch ;    
        
    }
    
    static function selectForMe($userId) {
        
        global $bdd;
        $sql = "SELECT id_sondage, nom, statut FROM sondage WHERE user_id=:user_id ORDER BY id_sondage DESC";
        $prepare = $bdd->prepare($sql);
        $prepare->execute([
            "user_id"=>$userId
        ]);
        $fetchAll = $prepare->fetchAll();
        return $fetchAll ;    
        
    }
    
}
