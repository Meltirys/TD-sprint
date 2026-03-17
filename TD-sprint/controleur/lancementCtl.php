<?php
    $qcm = "nothing";
    // var_dump($_POST["choixQCM"]);
    switch ($_POST["choixQCM"]){
        case "dev":
            $qcm = "/dev-QCM.php";//chemin qcm dev
            break;
        case "testeur":
            $qcm = "/RH-QCM.php";//chemin qcm testeur
            break;
        case "scrum":
            $qcm = "/ScrumQCM.php";//chemin qcm srum master
            break;
        default:
            $qcm = "/vue/accueilVue.php";
            break;
    }

    require RACINE . $qcm;
?>