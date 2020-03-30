<?php


class GeneralCTR extends Controller {
    public function getListCommune(){
        $general_mng = new GeneralMNG($this->db);
        return $general_mng->getListCommune();
    }
    
    public function getListWilaya(){
        $general_mng = new GeneralMNG($this->db);
        return $general_mng->getListWilaya();
    }
    
    public function getListCategorie(){
        $general_mng = new GeneralMNG($this->db);
        return $general_mng->getListCategorie();
    }
    
    public function getListDomaine(){
        $general_mng = new GeneralMNG($this->db);
        return $general_mng->getListDomaine();
    }

    public function getCommuneByWilaya($wilaya){
        $general_mng = new GeneralMNG($this->db);
        $list = $general_mng->getCommuneParWilaya($wilaya);
        $res = '';
        foreach ($list as $commune) {
            $res = $res . '<option value=". ' . $commune['commune'] . '">' . $commune['commune'] . '</option>';
        }
        
        return $res;
    }
    
    public function addDomaine_ecole($ecole,$domaine){
        $general_mng = new GeneralMNG($this->db);
        $general_mng->addDomaine_ecole($ecole, $domaine);
    }
            
}
