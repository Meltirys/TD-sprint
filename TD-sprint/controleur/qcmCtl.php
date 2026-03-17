<?php

require RACINE . "/vue/candidat-test.php"

//   // load the 2 functions (displayInfo and displayError) that render the user's messages
//   require_once (RACINE. '/functions/messages.php');

//   try {
//     $dbConnector = new PDO(
//         "mysql:dbname=" . $_ENV['DB_NAME'] . "; host=" . $_ENV['DB_HOST'] . ":" . $_ENV['DB_PORT'] . "; charset=utf8", 
//         $_ENV['DB_LOGIN'],
//         $_ENV['DB_PASSWORD']
//     );
//     $dbConnector->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

//     $stmt=$dbConnector->prepare("INSERT INTO CANDIDAT (prenom, nom, ) VALUES (:description, :prix) ");
//     $stmt->execute(array (
//       ':description' => $description, 
//       ':prix' => $prix));
    
//     // success message
//     displayInfo("Le produit ".$_POST['description']." (".$_POST['prix'].") a été ajouté.");
//   }
//   // on capture les exceptions si une exception est lancée, on affiche l'erreur
//   catch (Exception $e){
//     displayError($e->getMessage());
//   }

//   // At that point, this script ends and returns where it commes from (in app/controleur/form.php)
?>
