<?php



require_once('manager.php');

class ManagerCompanies extends Manager{
    public function getCompanies()
    {
       $db = $this->dbConnect();
       $request = $db->prepare("SELECT * FROM company ORDER BY compagnie_id DESC LIMIT 0, 5" );
       $request->execute();
       return $request->fetchAll(); // retenir cette phrase, ne pas oublier le fetch, nom d'une cacahuète
    }
}