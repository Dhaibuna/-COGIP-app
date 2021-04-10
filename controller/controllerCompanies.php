<?php
require('model/managerCompanies.php');

class CompaniesController
{
    public function homePage()
    {
        $request = new ManagerCompanies(); // partie render pour les compagnies / Manager communique avec controller
        $companies = $request->getCompanies(); // partie render pour les compagnies / Vue affichage

        var_dumb($companies);
        require('./view/homePageView.php');
    }
}