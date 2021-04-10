<?php
require('model/managerCompanies.php');
require('controller/controllerCompanies.php');
?>

<section>
    <h1>Bienvenue à la COGIP !</h1>
</section>

<section>
    <h2> Dernières sociétés </h2>

    <table>
    <?php
    foreach ($companies as $company) : { ?>

        <tr>
            <th>Nom</th>
            <th>TVA</th>
            <th>Pays</th>
            <th>Type</th>

        </tr>

        <tr>
            <th><?=$company['nom']?></th>
            <th><?=$company['VAT_number']?></th>
            <th><?=$company['pays']?></th>
            <th><?=$company['type']?></th>
        </tr>

        <?php } endforeach;?>
    <table>
</section>

<!-- connexion base de données = model / fonctions = controller / affichage view
// Voir la fonction render