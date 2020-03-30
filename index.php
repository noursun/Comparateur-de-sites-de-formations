<?php

require './modele/modele.php';
require './controller/controller.php';

$user_ctr = new UserCTR(connection());
$ecole_ctr = new EcoleCTR(connection());
$general_ctr = new GeneralCTR(connection());
$comm_rep_ctr = new Commentaire_reponseCTR(connection());

$list_commun = $general_ctr->getListCommune();
$list_wilaya = $general_ctr->getListWilaya();
$list_nom_ecole = $ecole_ctr->getNomEcole();
$list_domaine = $general_ctr->getListDomaine();

session_start();

if(isset($_GET['action'])){
    switch ($_GET['action']){
        case "accueil":
            require './view/accueil.php';
            break;
        
        case "univercitaire":
            $listEcoles = $ecole_ctr->getListByCategorie('universitaire');
            require './view/univercitaires.php';
            break;
        
        case "professionnelle":
            $listEcoles = $ecole_ctr->getListByCategorie('professionnelle');
            require './view/professionnelles.php';
            break;
        
        case "secondaire":
            $listEcoles = $ecole_ctr->getListByCategorie('secondaire');
            require './view/secondaires.php';
            break;
        
        case "moyenne":
            $listEcoles = $ecole_ctr->getListByCategorie('moyenne');
            require './view/moyennes.php';
            break;
        
        case "primaire":
            $listEcoles = $ecole_ctr->getListByCategorie('primaire');
            require './view/primaires.php';
            break;
        
        case "maternelle":
            $listEcoles = $ecole_ctr->getListByCategorie('maternelle');
            require './view/maternelles.php';
            break;
        
        case "comparaison":
            $categories = $general_ctr->getListCategorie();
            $commentaires1 = $comm_rep_ctr->getCommByEcole(0);
            $commentaires2 = $comm_rep_ctr->getCommByEcole(0);
            require './view/comparaison.php';
            break;
        
        case "gestion_ecoles":
            if(isset($_SESSION['userType'])){
                if($_SESSION['userType'] == 'admin'){
                    $categories = $general_ctr->getListCategorie();
                    $listEcoles = $ecole_ctr->getList();
                    require './view/gestion_ecoles.php';
                }
            }
            break;
            
        case "gestion_membres":
            if(isset($_SESSION['userType'])){
                if($_SESSION['userType'] == 'admin'){
                    require './view/gestion_membres.php';
                }
            }
            break;
            
        case "gestion_commentaires":
            if(isset($_SESSION['userType'])){
                if($_SESSION['userType'] == 'admin'){
                    require './view/gestion_commentaires.php';
                }
            }
            break;
        
        case "apropos":
            require './view/accueil.php';
            break;
        
        case "login":
            require './view/login.php';
            break;
        
        case "authentification":
            if(isset($_POST['pseudo'])&& isset($_POST['password'])){
                $donnees = array('pseudo' => $_POST['pseudo'] , 'password' => $_POST['password']);
                $exists = $user_ctr->authentification($donnees);
                
                if($exists){
                    require './view/accueil.php';
                }else{
                    require './view/login.php';
                }
            }
            break;
            
        case "logout":
            $_SESSION['login'] = false;
            $_SESSION['userType'] = '';
            require './view/accueil.php';
            break;
        
        case "commenter":
            if(isset($_SESSION['login'])){
                if($_SESSION['login']){
                    $commentaires = $comm_rep_ctr->getCommByEcole((int)$_GET['ecole']);
                    require('./view/commentaire.php');
                }
            }
            break;
            
        case "newCommentaire":
            if(isset($_SESSION['login'])){
                if($_SESSION['login']){
                    if(isset($_POST['commentaire']) && isset($_GET['ecole'])){
                        $donnees = array('idEcole' => (int) $_GET['ecole'], 'idUser' => (int) $_SESSION['idUser'], 
                            'commentaire' => $_POST['commentaire']);
                        $comm_rep_ctr->addCommentaire($donnees);
                        exit('ok');
                    }
                }
            }
            break;
            
        case "repondreComm":
            if(isset($_SESSION['login'])){
                if($_SESSION['login']){
                    if(isset($_POST['idComm']) && isset($_POST['reponse'])){
                        $donnees = array('idComm' => (int) $_POST['idComm'], 'idUser' => (int) $_SESSION['idUser'], 
                            'reponse' => $_POST['reponse']);
                        $comm_rep_ctr->addReponse($donnees);
                        exit('ok');
                    }
                }
            }
            break;
            
        case "ecoleByCategorie":
            if(isset($_POST['categorie'])){
                $res = $ecole_ctr->filSelectEcole($_POST['categorie']);
                exit($res);
            }
            break;
            
        case "choixEcole":
            if(isset($_POST['ecole1']) && isset($_POST['ecole2'])){
                $categories = $general_ctr->getListCategorie();
                $commentaires1 = $comm_rep_ctr->getCommByEcole((int)$_POST['ecole1'] );
                $commentaires2 = $comm_rep_ctr->getCommByEcole((int)$_POST['ecole2'] );
                require './view/comparaison.php';
            }
            break;
            
        case "newEcole":
            if(isset($_POST['categorie'])&&isset($_POST['nomEcole'])&&isset($_POST['wilaya'])&&isset($_POST['commune'])
                    &&isset($_POST['adresse']) && isset($_POST['telEcole']) && isset($_POST['fax'])){
                $donnees = array('categorie' => $_POST['categorie'], 'nomEcole' => $_POST['nomEcole'], 'wilaya' => $_POST['wilaya'],
                    'commune' => $_POST['commune'], 'adresse' => $_POST['adresse'] , 'telEcole' => $_POST['telEcole'],
                    'fax' => $_POST['fax']);
                $id = $ecole_ctr->add($donnees);
                if(($_POST['categorie'] == 'universitaire') || ($_POST['categorie'] == 'professionnelle')){
                    $general_ctr->addDomaine_ecole($id, $_POST['domaine']);
                }
                exit('yes');
            }
            break;
            
        case "communeByWilaya":
            if(isset($_POST['wilaya'])){
                $res = $general_ctr->getCommuneByWilaya($_POST['wilaya']);
                exit($res);
            }
            break;
    }
}else{
    require './view/accueil.php';
}

function connection(){
        try{
            $db = new PDO('mysql:host=localhost;dbname=projetweb','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }catch(Exception $e){
            die('Erreur : '.$e->getMessage()); 
        }
        return $db;
   }