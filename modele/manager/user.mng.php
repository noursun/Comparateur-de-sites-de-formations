<?php

class UserMNG extends Manager {
    
    public function exists(User $user){
        $req = $this->db->prepare('select * from User where pseudo = ? and password = ?');
        $req->execute(array($user->getPseudo(),$user->getPassword()));
        $user = NULL;
        while($donnee = $req->fetch()){
            $user = new User($donnee);
        }
        return $user;
    }
}
