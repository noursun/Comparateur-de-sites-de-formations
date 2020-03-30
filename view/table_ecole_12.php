
<table class="tableEcole">
    <thead>
        <tr>
            <td>Nom</td>
            <td>Domaine</td>
            <td>Wilaya</td>
            <td>Commune</td>
            <td>Adresse</td>
            <td>Tél</td>
            <td>Fax</td>
            <td></td>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($listEcoles as $ecole) {
            echo '<tr>';
            echo '<td><a href="#" style="color: rgb(88,88,88);">' . $ecole->getNomEcole() .'</a></td>';
            echo '<td>' . $ecole->getDomaineFormation() .'</td>';
            echo '<td>' . $ecole->getWilaya() .'</td>';
            echo '<td>' . $ecole->getCommune() .'</td>';
            echo '<td>' . $ecole->getAdresse() .'</td>';
            echo '<td>' . $ecole->getTelEcole() .'</td>';
            echo '<td>' . $ecole->getFax() .'</td>';
            if(isset($_SESSION['login'])){
                if($_SESSION['login']){
                    ?>
        <td><a class="commentaire" target='_blank' href="index.php?action=commenter&amp;ecole=<?php echo $ecole->getIdEcole();?>">commenter</a></td>
            <?php
                }
            }
            echo '</tr>';
        }
        ?>
    </tbody>
</table>

