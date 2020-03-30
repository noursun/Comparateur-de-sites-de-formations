<?php $title = 'Professionnelle'; ?>

<?php ob_start(); ?>

<div class="titrePageForm">
    <label>Formations Professionnelles</label>
</div>

<?php 
require './view/filtre.php';

require './view/table_ecole_12.php';
?>

<?php $contenu = ob_get_clean(); ?>

<?php require('view/template.php'); ?>