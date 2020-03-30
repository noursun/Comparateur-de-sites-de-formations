<?php $title = 'Univercitaire'; ?>

<?php ob_start(); ?>
<div class="titrePageForm">
    <label>Formations Universitaires</label>
</div>
<?php 
require './view/filtre.php';

require './view/table_ecole_12.php';
?>

<?php $contenu = ob_get_clean(); ?>

<?php require('view/template.php'); ?>