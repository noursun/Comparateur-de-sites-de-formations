<?php

class ReponseMNG extends Manager {
    public function add(Reponse $reponse){
        $req = $this->db->prepare('insert into reponse_commentaire(idComm,idUser,dateRep,reponse) values(?,?,now(),?)');
        $req->execute(array($reponse->getIdComm(),$reponse->getIdUser(),$reponse->getReponse()));
    }
    
    public function getByCommentaire($id){
        $req = $this->db->prepare('select * from reponse_commentaire , user where reponse_commentaire.idComm = ? and reponse_commentaire.idUser = user.idUser order by dateRep desc');
        $req->execute(array($id));
        
        $list = array();
        
        while($donnee = $req->fetch()){
            $list[] = $donnee;
        }
        
        return $list;
    }
}
