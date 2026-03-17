<?php

use Aws\S3\Exception\TokenRefreshRequiredException;

use function Avifinfo\read;

require "controleur/config.php";

$action = null;

// var_dump($_POST["action"]);

if (isset($_POST["action"])) {
    $action = $_POST["action"];
}

if (isset($_GET["action"])) {
    $action = $_GET["action"];
}

switch ($action){
    case "accueil":
        require RACINE . "/vue/accueilVue.php";
        break;
    case "candidat":
        require RACINE . "/controleur/idCandidatCtl.php";
        break;
    case "resultats":
        require RACINE . "/vue/resultatsRH.php";
        break;
    // case "postCandidat":
    //     require RACINE . "/"
    case "validerQuestionaire":
        var_dump($action);
        require RACINE . "/vue/candidat-test.php";
        break;
    default:
        require RACINE . "/vue/accueilVue.php";
        break;
}