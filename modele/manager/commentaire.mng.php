<?php

class CommentaireMNG extends Manager {
    public function add(Commentaire $comm){
        $req = $this->db->prepare('insert into commentaire(idEcole, idUser, dateComm, commentaire) values (?,?,now(),?)');
        $req->execute(array($comm->getIdEcole(),$comm->getIdUser(),$comm->getCommentaire()));
    }
    
    public function getByEcole($id){
        $req = $this->db->prepare('select * from commentaire , user where commentaire.idEcole = ? and commentaire.idUser = user.idUser order by dateComm desc');
        $req->execute(array($id));
        
        $list = array();
        
        while($donnee = $req->fetch()){
            $list[] = $donnee;
        }
        
        return $list;
    }
}
