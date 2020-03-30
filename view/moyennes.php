<?php $title = 'Moyenne'; ?>

<?php ob_start(); ?>

<div class="titrePageForm">
    <label>Formations Moyennes</label>
</div>

<?php 
require './view/filtre.php';

require './view/table_ecole_3456.php';
?>

<?php $contenu = ob_get_clean(); ?>

<?php require('view/template.php'); ?>