<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<section>
    <h1>Bienvenue à la COGIP !</h1>
</section>

<section>
    <h2> Dernières sociétés </h2>

    <table>
    <?php

    foreach ($companies as $company) : ?>

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

        <?php endforeach ?>
    <table>
</section>
</body>
</html>
<!-- connexion base de données = model / fonctions = controller / affichage view
// Voir la fonction render