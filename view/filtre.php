<div class="filtre">
    <div>
        <select class="selectFiltre">
            <option> Toutes les écoles</option>
            <?php 
            foreach ($list_nom_ecole as $nom) {
                echo '<option>' . $nom['nomEcole'] . '</option>';
            }
            ?>
        </select>
    </div>
    <div>
        <select class="selectFiltre">
            <option>Toutes les wilayas</option>
            <?php
            foreach ($list_wilaya as $wilaya) {
                echo '<option>' . $wilaya['wilaya'] . '</option>';      
            }
            ?>
        </select>
    </div>
    <div>
        <select class="selectFiltre">
            <option>Toutes les communes</option>
            <?php
            foreach ($list_commun as $commune) {
                echo '<option>' . $commune['commune'] . '</option>';      
            }
            ?>
        </select>
    </div>
    <div>
        <input type="button" value="Filtrer" class="btnFiltrer"/>
    </div>
</div>
