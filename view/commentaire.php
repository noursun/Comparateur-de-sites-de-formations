<! DOCTYPE html>
<html>
    <head>
        <title>Commentaire</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="public/css/style.css" /> 
    </head>
    <body>
        <div class="pageCommentaire">
            <div class="blocNewCommentaire">
                <div>
                    <textarea rows="4" cols="100" placeholder="ajouter un commentaire ..." id="newCommentaire"></textarea> 
                </div>
                <input type="button" value="Ajouter" id="ajouterCommentaire" />
            </div>
            <?php
            foreach ($commentaires as $commentaire) {
                ?>
            <div class="commentaire-reponse">
                <div class="blocCommentaire">
                    <label style="color: rgb(88,88,88);"><?php echo $commentaire['pseudo'] . ' : ' . $commentaire['dateComm'] ;?></label>
                    <div>
                        <textarea rows="3" cols="100" disabled=""><?php echo $commentaire['commentaire']; ?></textarea> 
                    </div>
                    <div class="blocRep">
                        <div>
                            <textarea rows="3" cols="100" placeholder="ajouter une réponse ..." accesskey="<?php echo $commentaire['idComm'];?>" ></textarea> 
                        </div>
                        <input type="button" value="Répondre" class="btnRepondre"/>
                    </div>
                </div>
                <?php
                $listRep = $comm_rep_ctr->getRepByComm((int) $commentaire['idComm']);
                foreach ($listRep as $reponse) {
                    ?>
                <div class="blocRep">
                    <label style="color: rgb(88,88,88);"><?php echo $reponse['pseudo'] . ' : ' . $reponse['dateRep'] ;?></label>
                    <div>
                        <textarea rows="3" cols="100" disabled=""><?php echo $reponse['reponse']; ?></textarea> 
                    </div>
                </div>
                <?php
                }
            ?>
            </div>
            <?php
            }
            ?>
            
        </div>
    </body>
</html>

<script src="public/js/jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#ajouterCommentaire').click(function(){
            $.post(
                    'index.php?action=newCommentaire&ecole=<?php echo $_GET['ecole'];?>',
                    {
                        commentaire : $("#newCommentaire").val()
                    },
                    function(data){
                        console.log(data);
                        $('#test').html(data);
                    }
                );
        });
        
        $('.btnRepondre').each(function(){
            $(this).click(function(){
                $.post(
                'index.php?action=repondreComm',
                {
                    idComm : $(this).parent().find('textarea').eq(0).attr("accesskey"),
                    reponse : $(this).parent().find('textarea').eq(0).val()
                },
                function(data){
                    $('#test').html(data);
                }
                );
            });
        });
    });
</script>
