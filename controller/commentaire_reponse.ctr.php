<?php


class Commentaire_reponseCTR extends Controller {
    public function addCommentaire(Array $donnees){
        $comm = new Commentaire($donnees);
        $comm_mng = new CommentaireMNG($this->db);
        $comm_mng->add($comm);
    }
    
    public function getCommByEcole($id){
        $comm_mng = new CommentaireMNG($this->db);
        return $comm_mng->getByEcole($id);
    }
    
    public function addReponse(Array $donnees){
        $rep = new Reponse($donnees);
        $rep_mng = new ReponseMNG($this->db);
        $rep_mng->add($rep);
    }
    
    public function getRepByComm($id){
        $rep_mng = new ReponseMNG($this->db);
        return $rep_mng->getByCommentaire($id);
    }
    
    public function filBlocCommentaireByEcole($id){
        $comm_mng = new CommentaireMNG($this->db);
        $commentaires = $comm_mng->getByEcole($id);
        $res = '';
        foreach ($commentaires as $commentaire) {
            $res = $res . '<div class="blocCommentaire">';
            $res = $res . '<label style="color: rgb(88,88,88);">' . $commentaire['pseudo'] . ' : ' . $commentaire['dateComm'] . '</label>';
            $res = $res . '<div>';
            $res = $res . '<textarea rows="3" cols="50" disabled="">' . $commentaire['commentaire'] . '</textarea>';
            $res = $res . '</div>';
            $res = $res . '</div>';
        }
            
        return $res;
    }
}
