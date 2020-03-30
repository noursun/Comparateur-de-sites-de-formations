
<table class="tableEcole" style="margin: 20px 0 0 0;">
    <thead>
        <tr>
            <td>Nom</td>
            <td>Categorie</td>
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
            echo '<td>' . $ecole->getNomEcole() .'</td>';
            echo '<td>' . $ecole->getCategorie() .'</td>';
            echo '<td>' . $ecole->getWilaya() .'</td>';
            echo '<td>' . $ecole->getCommune() .'</td>';
            echo '<td>' . $ecole->getAdresse() .'</td>';
            echo '<td>' . $ecole->getTelEcole() .'</td>';
            echo '<td>' . $ecole->getFax() .'</td>';
            echo '<td><input type="checkbox" name="" value="ON" class="action"/></td>'; 
            echo '</tr>';
        }
        ?>
    </tbody>
</table>

