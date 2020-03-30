<?php

class Manager
{
   protected $db;
    
    public function __construct(PDO $db)
    {
        $this->setDb($db);
    }
    
    //**********************************************
    
    public function setDb($db) {
        $this->db = $db;
        return $this;
    }
}