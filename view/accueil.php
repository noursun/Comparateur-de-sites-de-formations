<?php $title = 'Accueil'; ?>

<?php ob_start(); ?>

<div class="cadreForm" style="background-image: url('./public/img/univer.jpg');">
    <div class="titreForm">
        <a href="index.php?action=univercitaire">Formations universitaires</a>
    </div>
</div>
    
<div class="cadreForm" style="background-image: url('./public/img/profe.jpg')">
    <div class="titreForm ">
        <a href="index.php?action=professionnelle">Formations professionnelles</a>
    </div>
</div>

<div class="cadreForm" style="background-image: url('./public/img/second.jpg')">
    <div class="titreForm">
        <a href="index.php?action=secondaire">Formations secondaires</a>
    </div>
</div>

<div class="cadreForm" style="background-image: url('./public/img/moyen.jpg')">
    <div class="titreForm">
        <a href="index.php?action=moyenne">Formations moyennes</a>
    </div>
</div>

<div class="cadreForm" style="background-image: url('./public/img/primair.jpeg')">
    <div class="titreForm">
        <a href="index.php?action=primaire">Formations primaires</a>
    </div>
</div>

<div class="cadreForm" style="background-image: url('./public/img/mater.jpg')">
    <div class="titreForm">
        <a href="index.php?action=maternelle">Formations maternelles</a>
    </div>
</div>

<?php $contenu = ob_get_clean(); ?>

<?php require('view/template.php'); ?>