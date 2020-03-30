<?php

class Ecole extends Entity{
    private $idEcole;
    private $nomEcole;
    private $wilaya;
    private $commune;
    private $adresse;
    private $telEcole;
    private $categorie;
    private $fax;
    private $domaineFormation;
            
    function getIdEcole() {
        return $this->idEcole;
    }

    function getNomEcole() {
        return $this->nomEcole;
    }

    function getWilaya() {
        return $this->wilaya;
    }

    function getCommune() {
        return $this->commune;
    }

    function getAdresse() {
        return $this->adresse;
    }

    function getTelEcole() {
        return $this->telEcole;
    }

    function getCategorie() {
        return $this->categorie;
    }

    function getFax() {
        return $this->fax;
    }

    function setIdEcole($idEcole) {
        $this->idEcole = $idEcole;
    }

    function setNomEcole($nomEcole) {
        $this->nomEcole = $nomEcole;
    }

    function setWilaya($wilaya) {
        $this->wilaya = $wilaya;
    }

    function setCommune($commune) {
        $this->commune = $commune;
    }

    function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    function setTelEcole($telEcole) {
        $this->telEcole = $telEcole;
    }

    function setCategorie($categorie) {
        $this->categorie = $categorie;
    }

    function setFax($fax) {
        $this->fax = $fax;
    }

    function getDomaineFormation() {
        return $this->domaineFormation;
    }

    function setDomaineFormation($domaineFormation) {
        $this->domaineFormation = $domaineFormation;
    }

}
