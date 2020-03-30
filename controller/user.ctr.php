<?php

class UserCTR extends Controller {
    
    public function authentification(array $donnees){
        $user = new User($donnees);
        $user_mng = new UserMNG($this->db);
        $user = $user_mng->exists($user);
        
        if($user != NULL){
            
            $_SESSION['idUser'] = $user->getIdUser();
            $_SESSION['pseudo'] = $user->getPseudo();
            $_SESSION['password'] = $user->getPassword();
            $_SESSION['userType'] = $user->getType();
            $_SESSION['login'] = true;
            
            return true;
        }else{
            return false;
        }
    }
}
