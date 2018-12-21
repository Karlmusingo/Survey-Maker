<?php
require 'include/bdd.php';
class Section {
    
    static function add($section, $sondageId) {
        global $bdd;
        
        $sql = "INSERT INTO section (section, sondage_id) VALUES (:section, :sondage_id)";
        $prepare = $bdd->prepare($sql);
        $prepare->execute([
            "section"=>$section,
            "sondage_id"=>$sondageId
        ]);
        
        return $bdd->lastInsertId();
    }
    
    static function select($sondageId) {
        global $bdd;
        
        $sql = "SELECT * FROM section WHERE sondage_id=:sondage_id";
        $prepare = $bdd->prepare($sql);
        $prepare->execute([
            "sondage_id"=>$sondageId
        ]);
        
        $fetchAll = $prepare->fetchAll();
        
        return $fetchAll;
    }
    
    static function update($section, $id){
        global $bdd;        
        $sql = "UPDATE section SET section=:section WHERE id_section=:id_section";
        $prepare = $bdd->prepare($sql);
        $prepare->execute([
            "section"=>$section,
            "id_section"=>$id
        ]);
        
        return true;
    }
    
}
