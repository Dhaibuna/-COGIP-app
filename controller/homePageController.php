<?php

require_once('model/managerCompanies.php');

class HomePageController
{
    public function render()
    {
        $requestCompanies = new ManagerCompanies();
        // partie render pour les compagnies / Manager communique avec controller
        $companies= $requestCompanies->getCompanies(); // $companies est appelée dans la view(foreach)
        // partie render pour les compagnies / Vue affichage
        require('./view/homepage.php');
    }
}