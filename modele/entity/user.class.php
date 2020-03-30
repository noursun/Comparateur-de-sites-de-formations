<?php

class User extends Entity{
    
    private $idUser;
    private $pseudo;
    private $password;
    private $type;
    
    function getIdUser() {
        return $this->idUser;
    }

    function getPseudo() {
        return $this->pseudo;
    }

    function getPassword() {
        return $this->password;
    }

    function getType() {
        return $this->type;
    }

    function setIdUser($idUser) {
        $this->idUser = $idUser;
    }

    function setPseudo($pseudo) {
        $this->pseudo = $pseudo;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setType($type) {
        $this->type = $type;
    }
}
