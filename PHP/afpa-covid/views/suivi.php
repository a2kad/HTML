<?php include "components/header.php" ?>
<?php include "components/navbar.php" ?>
<h1>AFPA COVID</h1>
<hr>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Région ID</th>
            <th>Nom de la région</th>
            <th>Total 1ère dose</th>
            <th>Total 2ème dose</th>
        </tr>
    </thead>
    <tbody>
    <?php
        // je boucle sur le tableau $result
        foreach ( Covid::getAllVactinations() as $row) { ?>
            <tr>
                <td><?= $row['region_id'] ?></td>
                <td><?= $row['region_name'] ?></td>
                <td><?= $row['dose1_total'] ?></td>
                <td><?= $row['dose2_total'] ?></td>
            </tr>

        <?php } ?>
    </tbody>
</table>
<hr>
<a class="btn btn-secondary" href="../index.php">Accueil</a>
<hr>
<?php include "components/footer.php" ?>