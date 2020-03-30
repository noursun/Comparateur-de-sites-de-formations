<?php $title = 'Gestion des écoles'; ?>

<?php ob_start(); ?>

<div class="titrePageForm">
    <label>Gestion des écoles</label>
</div>

<div class="blocTextAjout">
    <label>Nouvelle école</label>
</div>
<div class="ajouterEcole">
    <div>
        <select name="categorie" id="categorie">
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
        <input type="text" placeholder="Nom de l'école" id="nomEcole" />
    </div>
    <div id='blocDomaine'>
        <select id='dommaine'>
            <option>Domaine</option>
            <?php
                foreach ($list_domaine as $domaine) {
                    ?>
            <option value="<?php echo $domaine['domaineformation']; ?>"><?php echo $domaine['domaineformation']; ?></option>
            <?php
                }
            ?>
        </select>
    </div>
    <div>
        <select id="wilaya" >
            <option>Wilaya</option>
            <?php
            foreach ($list_wilaya as $wilaya) {
                echo '<option value="' . $wilaya['wilaya'] .'">' . $wilaya['wilaya'] . '</option>';      
            }
            ?>
        </select>
    </div>
    <div>
        <select  id="commune">
            <option>Commune</option>
        </select>
    </div>
    <div>
        <input type="text" placeholder="Adresse" id="adresse" />
    </div>
    <div>
        <input type="text" placeholder="Tél" id="telEcole" />
    </div>
    <div>
        <input type="text" placeholder="Fax" id="fax" />
    </div>
</div>
<div>
    <input type="button" value="Ajouter" class="btnFiltrer" id="ajouterEcole"/>
</div>
<div style="margin: 20px 0 0 0;">
    <input type="button" value="Supprimer" class="btnFiltrer" id="supprimer" style="margin: 0 10px 0 0;"/>
    <input type="button" value="Modifer" class="btnFiltrer" id="modifier" style="margin: 0 10px 0 0;"/>
    <input type="button" value="Désactiver" class="btnFiltrer" id="desactiver" style="margin: 0 10px 0 0;"/>
</div>
<?php
    require './view/table.php';

?>

<?php $contenu = ob_get_clean(); ?>

<?php require('view/template.php'); ?>

<script src="public/js/jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#blocDomaine').hide();
        
        $('#ajouterEcole').click(function(){
            $.post(
            'index.php?action=newEcole',
            {
                categorie: $('#categorie').val(),
                nomEcole : $('#nomEcole').val(),
                wilaya : $('#wilaya').val(),
                commune : $('#commune').val(),
                adresse : $('#adresse').val(),
                telEcole : $('#telEcole').val(),
                fax : $('#fax').val(),
                domaine : $('#domaine').val()
            },
            function(data){
                console.log(data);
                alert('succes !');
                $('#blocDomaine').hide();
            }
            );
        });
        
        $('#categorie').change(function(){
            if(($('#categorie').val() == 'universitaire')||($('#categorie').val() == 'professionnelle')){
                $('#blocDomaine').show();
            }else{
                $('#blocDomaine').hide();
            }
        });
        
        $('#wilaya').change(function(){
            $.post(
            'index.php?action=communeByWilaya',
            {
                wilaya : $('#wilaya').val()
            },
            function(data){
                $('#commune').html('<option>Commune</option>' + data);
            }
            );
        });
        
        $('#supprimer').click(function(){
            $('.action').each(function{
                if($(this).attr('checked')){
                    console.log('eee');
                }
            });
        });
    });
</script>
