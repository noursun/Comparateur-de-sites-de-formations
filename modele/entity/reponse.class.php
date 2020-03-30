<?php

class Reponse extends Entity {
    private $idRepComm;
    private $idUser;
    private $idComm;
    private $reponse;
    private $dateRep;
            
    function getIdRepComm() {
        return $this->idRepComm;
    }

    function getIdUser() {
        return $this->idUser;
    }

    function getIdComm() {
        return $this->idComm;
    }

    function getReponse() {
        return $this->reponse;
    }

    function setIdRepComm($idRepComm) {
        $this->idRepComm = $idRepComm;
    }

    function setIdUser($idUser) {
        $this->idUser = $idUser;
    }

    function setIdComm($idComm) {
        $this->idComm = $idComm;
    }

    function setReponse($reponse) {
        $this->reponse = $reponse;
    }

    function getDateRep() {
        return $this->dateRep;
    }

    function setDateRep($dateRep) {
        $this->dateRep = $dateRep;
    }


}
