<?php
// require_once "./config.php";
require RACINE . "/classe/classeCandidat.php";


if (!empty($_POST["prenom"]) AND !empty($_POST["nom"]))
    {
      // secure submitted data and go to registration in the database
      $candidat =new Candidat($_POST["prenom"],$_POST["nom"],$_POST["choixQCM"]);
      
      require RACINE . "/controleur/lancementCtl.php";
    }
else{
    
    require RACINE . "/vue/formCandidatVue.php";
}