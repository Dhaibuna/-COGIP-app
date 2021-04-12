<?php

require_once('model/managerCompanies.php');

class CompaniesController
{
    public function renderCompanies()
    {
        $request = new ManagerCompanies();
        // partie render pour les compagnies / Manager communique avec controller
        $request->getCompanies();
        // partie render pour les compagnies / Vue affichage
        require('./view/homepage.php');
        echo 'Hello';
    }
}