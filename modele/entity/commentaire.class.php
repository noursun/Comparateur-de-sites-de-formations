<?php

class Commentaire extends Entity {
    
    private $idComm;
    private $idEcole;
    private $idUser;
    private $commentaire;
    private $dateComm;
    
    function getIdComm() {
        return $this->idComm;
    }

    function getIdEcole() {
        return $this->idEcole;
    }

    function getIdUser() {
        return $this->idUser;
    }

    function getCommentaire() {
        return $this->commentaire;
    }

    function setIdComm($idComm) {
        $this->idComm = $idComm;
    }

    function setIdEcole($idEcole) {
        $this->idEcole = $idEcole;
    }

    function setIdUser($idUser) {
        $this->idUser = $idUser;
    }

    function setCommentaire($commentaire) {
        $this->commentaire = $commentaire;
    }

    function getDateComm() {
        return $this->dateComm;
    }

    function setDateComm($dateComm) {
        $this->dateComm = $dateComm;
    }


}
