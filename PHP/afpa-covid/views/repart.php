<?php include "components/header.php" ?>
<?php include "components/navbar.php" ?>
<h1>AFPA COVID</h1>
<hr>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Type vaccin</th>
            <th>Région Num</th>
            <th>Nom de la région</th>
            <th>Total 1ère dose</th>
            <th>Total 2ème dose</th>
            <th> - </th>
        </tr>
    </thead>
    <tbody>
        <?php
        // je boucle sur le tableau $result
        foreach (Repart::getVactinationsRepart() as $value) {
            

            ?>
            <tr>
                <td><?= $value['vaccin_name'] ?></td>
                <td><?= $value['departament_code'] ?></td>
                <td><?= $value['departament_name'] ?></td>
                <td><?= $value['total_dose1'] ?></td>
                <td><?= $value['total_dose2'] ?></td>
                
            </tr>

        <?php } ?>
    </tbody>
</table>
<hr>
<a class="btn btn-secondary" href="../index.php">Accueil</a>
<hr>
<?php include "components/footer.php" ?>