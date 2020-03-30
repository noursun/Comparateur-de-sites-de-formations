<?php $title = 'Comparaison'; ?>

<?php ob_start(); ?>

<form class="filtre" method="POST" action="index.php?action=choixEcole">
    <div>
        <select name="categorie" class="selectFiltre" id="categorie">
            <option>Catégorie</option>
            <?php
                foreach ($categories as $categorie) {
                    ?>
            <option value="<?php echo $categorie['categorie']; ?>"><?php echo $categorie['categorie']; ?></option>
            <?php
                }
            ?>
        </select>
    </div>
    
    <div>
        <select name="ecole1" class="selectFiltre" id="ecole1">
            <option>Ecole 1</option>
        </select>
    </div>
    
    <div>
        <select name="ecole2" class="selectFiltre" id="ecole2">
            <option>Ecole 2</option>
        </select>
    </div>
    <div>
        <input type="submit" value="OK" class="btnFiltrer"/>
    </div>
    
</form>

<div class="titrePageForm">
    <label>Formations</label>
</div>
<div>
    
</div>

<div class="titrePageForm">
    <label>Commentaires</label>
</div>
<div class="compareCommentaire">
    <div id="commentaireEcole1">
        <?php
            foreach ($commentaires1 as $commentaire) {
                ?>
                <div class="blocCommentaire">
                    <label style="color: rgb(88,88,88);"><?php echo $commentaire['pseudo'] . ' : ' . $commentaire['dateComm'] ;?></label>
                    <div>
                        <textarea rows="3" cols="50" disabled=""><?php echo $commentaire['commentaire']; ?></textarea> 
                    </div>
                </div>
            <?php   
            }
            ?>
            
    </div>
    
    <div id="commentaireEcole2">
        <?php
            foreach ($commentaires2 as $commentaire) {
                ?>
                <div class="blocCommentaire">
                    <label style="color: rgb(88,88,88);"><?php echo $commentaire['pseudo'] . ' : ' . $commentaire['dateComm'] ;?></label>
                    <div>
                        <textarea rows="3" cols="50" disabled=""><?php echo $commentaire['commentaire']; ?></textarea> 
                    </div>
                </div>
            <?php   
            }
            ?>
    </div>
</div>


<?php $contenu = ob_get_clean(); ?>

<?php require('view/template.php'); ?>

<script src="public/js/jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#categorie').change(function(){
            $.post(
            'index.php?action=ecoleByCategorie',
            {
                categorie: $(this).val()
            },
            function(data){
                $('#ecole1').html('<option>Ecole1</option>' + data);
                $('#ecole2').html('<option>Ecole2</option>' + data);
            }
            );
        });
    });
</script>
