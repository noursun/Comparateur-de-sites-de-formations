<?php

class Entity
{
    public function __construct(array $donnee)
    {
        $this->hydrate($donnee);
    }
    
    public function hydrate(array $donnee)
    {
        foreach($donnee as $key => $value){
            $method = 'set'.ucfirst($key);
                
            if(method_exists($this, $method)){
                $this->$method($value);
            }
        }
    }
}
