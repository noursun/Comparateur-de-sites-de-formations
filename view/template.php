<! DOCTYPE html>
<html>
    <head>
        <title><?php echo $title;?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf8_bin">
        <link rel="stylesheet" href="public/css/style.css" /> 
    </head>
    <body>
        <div class="site">
            <header>
                <div id="logo">
                    <label>FORMATION<em>.word</em></label>
                </div>
                <div class="diaporama">
                    <div class="lienLogin">
                        <?php 
                        if(isset($_SESSION['login'])){
                            if($_SESSION['login']){
                                ?>
                        <a href="index.php?action=logout">Logout</a>
                        <?php
                            }else{
                                ?>
                        <a href="index.php?action=login">Login</a>
                        <?php
                            }
                        }else{
                            ?>
                        <a href="index.php?action=login">Login</a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </header>
            <div class="menu_pub_contenu">
                <div class="menu_pub">
                    <div class="menu">
                        <div><a href="index.php?action=accueil">Accueil</a></div>
                        <div><a href="index.php?action=univercitaire">Formations universitaires</a></div>
                        <div><a href="index.php?action=professionnelle">Formations professionnelles</a></div>
                        <div><a href="index.php?action=secondaire">Formations secondaires</a></div>
                        <div><a href="index.php?action=moyenne">Formations moyennes</a></div>
                        <div><a href="index.php?action=primaire">Formations primaires</a></div>
                        <div><a href="index.php?action=maternelle">Formations maternelles</a></div>
                        <div><a href="index.php?action=comparaison">Comparaison</a></div>
                        <?php 
                        if(isset($_SESSION['userType'])){
                            if($_SESSION['userType'] == 'admin'){
                        ?>
                        <div><a href="index.php?action=gestion_ecoles">Gestion des écoles</a></div>
                        <div><a href="index.php?action=gestion_membres">Gestion des membres</a></div>
                        <div><a href="index.php?action=gestion_commentaires">Gestion des commentaires</a></div>
                        <?php
                            }
                        }
                        ?>
                        <div><a href="index.php?action=apropos">A propos</a></div>
                    </div>
                    <div class="pub">
                        <div>
                            <img src="./public/img/pub1.jpg"/>
                        </div>
                        <div>
                            <img src="./public/img/pub2.jpg"/>
                        </div>
                        <div>
                            <img src="./public/img/pub3.jpg"/>
                        </div>
                    </div>
                </div>
                <div class="contenu">
                    <?php echo $contenu; ?>
                </div>
            </div>
            <footer>
                <div><a href="index.php?action=accueil">Accueil</a></div>
                <div><a href="index.php?action=univercitaire">Formations universitaires</a></div>
                <div><a href="index.php?action=professionnelle">Formations professionnelles</a></div>
                <div><a href="index.php?action=secondaire">Formations secondaires</a></div>
                <div><a href="index.php?action=moyenne">Formations moyennes</a></div>
                <div><a href="index.php?action=primaire">Formations primaires</a></div>
                <div><a href="index.php?action=maternelle">Formations maternelles</a></div>
                <div><a href="index.php?action=apropos">A propos</a></div>
            </footer>
        </div>
    </body>
</html>
