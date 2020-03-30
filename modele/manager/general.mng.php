<?php

class GeneralMNG extends Manager{
    
    public function getListCategorie(){
        $req = $this->db->query('select categorie from categorie order by categorie');
        $req->execute();
        $list = array();
        
        while($donnee = $req->fetch()){
            $list[] = $donnee;
        }
        
        return $list;
    }
    
    public function getListDomaine(){
        $req = $this->db->query('select domaineformation from domaineformation order by domaineformation');
        $req->execute();
        $list = array();
        
        while($donnee = $req->fetch()){
            $list[] = $donnee;
        }
        
        return $list;
    }

    public function getListCommune(){
        $req = $this->db->query('select distinct(commune) from commune order by commune');
        $req->execute();
        $list = array();
        
        while($donnee = $req->fetch()){
            $list[] = $donnee;
        }
        
        return $list;
    }
    
    public function getListWilaya(){
        $req = $this->db->query('select wilaya from wilaya order by wilaya');
        $req->execute();
        $list = array();
        
        while($donnee = $req->fetch()){
            $list[] = $donnee;
        }
        
        return $list;
    }
    
    public function getCommuneParWilaya($wilaya){
        $req = $this->db->prepare('select distinct(commune) from commune where wilaya = ?');
        $req->execute(array($wilaya));
        $list = array();
        
        while($donnee = $req->fetch()){
            $list[] = $donnee;
        }
        
        return $list;
    }
    
    public function addDomaine_ecole($ecole,$domaine){
        $req = $this->db->prepare('insert into ecole_domaine(idEcole,domaineFormation) values(?,?)');
        $req->execute(array($ecole,$domaine));
    }
    
}
