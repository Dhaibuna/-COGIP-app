<?php
declare(strict_types=1);

require_once('controller/homePageController.php');
// Require_once oblige a se déclarer une seule fois

$controller = new homePageController();
// j'instancie mon controller dans la variable que j'appelle en dessous
$controller->render();