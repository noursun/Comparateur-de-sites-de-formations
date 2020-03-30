<?php

class EcoleMNG extends Manager {
    
    public function getListByCategorie($categorie){
        
        if(($categorie != 'universitaire') && ($categorie != 'professionnelle')){
            $req = $this->db->prepare('select * from ecoleformation where categorie like ?');
        }else{
            $req = $this->db->prepare('select * from ecoleformation , ecole_domaine  where categorie like ? and ecoleformation.idEcole = ecole_domaine.idEcole');
        }
        
        $req->execute(array($categorie));
        $list = array();
        
        while($donnees = $req->fetch()){
            $list[] = new Ecole($donnees);
        }
        
        return $list;
    }
    
    public function getList(){
        $req = $this->db->prepare('select * from ecoleformation');
        $req->execute();
        $list = array();
        
        while($donnees = $req->fetch()){
            $list[] = new Ecole($donnees);
        }
        
        return $list;
    }

        public function getNomEcole(){
        $req = $this->db->query('select distinct(nomEcole) from ecoleformation order by nomEcole');
        $req->execute();
        $list = array();
        while($donnee = $req->fetch()){
            $list[] = $donnee;
        }
        
        return $list;
    }
    
    public function add(Ecole $ecole){
        $req = $this->db->prepare('insert into ecoleformation(categorie,nomEcole,wilaya,commune,adresse,telEcole,fax) values(?, ?,?,?,?,?,?) ');
        $req->execute(array($ecole->getCategorie(),$ecole->getNomEcole(),$ecole->getWilaya(),$ecole->getCommune(),$ecole->getAdresse(),
            $ecole->getTelEcole(),$ecole->getFax()));

        return $this->db->lastInsertId();
    }
    
}
