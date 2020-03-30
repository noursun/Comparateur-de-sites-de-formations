<?php

class EcoleCTR extends Controller {
    
    public function getListByCategorie($categorie){
        $ecole_mng = new EcoleMNG($this->db);
        return $ecole_mng->getListByCategorie($categorie);
    }
    
    public function getNomEcole(){
        $ecole_mng = new EcoleMNG($this->db);
        return $ecole_mng->getNomEcole();
    }
    
    public function filSelectEcole($categorie){
        $listEcoles = $this->getListByCategorie($categorie);
        
        $res = '';
        foreach ($listEcoles as $ecole) {
            $res = $res . '<option value="' . $ecole->getIdEcole() . '">' . $ecole->getNomEcole() . '</option>';
        }
        
        return $res; 
    }
    
    public function add(Array $donnee){
        $ecole_mng = new EcoleMNG($this->db);
        $ecole = new Ecole($donnee);
        return $ecole_mng->add($ecole);
    }
    
    public function getList(){
        $ecole_mng = new EcoleMNG($this->db);
        return $ecole_mng->getList();
    }
}
