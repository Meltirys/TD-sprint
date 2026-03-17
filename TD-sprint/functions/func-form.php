<?php

require RACINE . "/classe/classeCandidat.php";
//Connexion à la base de données
try {
    $bdd = new PDO('mysql:host=localhost;dbname=QCM;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //Récupération des infos de base
    $nom = $Candidat -> nom;
    $prenom = $Candidat -> prenom;
    $poste = $Candidat -> typeQCM;

    //Calcul du temps (Heure actuelle - Heure de début)
    $tempsFinal = $_POST['chrono'];

    // Calcul du score
    // On définit les bonnes réponses pour chaque quiz
    $solutions = [
        'dev'   => ['reponse1' => 'qr3', 'reponse2' => 'qr5', 'reponse3' => 'qr11', 'reponse4' => 'qr14', 'reponse5' => 'qr19'],
        'rh'    => ['reponse1' => 'qr3', 'reponse2' => 'qr5', 'reponse3' => 'qr12', 'reponse4' => 'qr14', 'reponse5' => 'qr17'],
        'scrum' => ['reponse1' => 'qr3', 'reponse2' => 'qr6', 'reponse3' => 'qr10', 'reponse4' => 'qr14', 'reponse5' => 'qr17']
    ];

    $score = 0;
    $bonnes = $solutions[$typeQuiz];

    // On compare les réponses envoyées avec les solutions
    foreach ($bonnes as $index => $valeurCorrecte) {
        if (isset($_POST[$index]) && $_POST[$index] === $valeurCorrecte) {
            $score++;
        }
    }

    // Insertion dans la table participant
    $req = $bdd->prepare("INSERT INTO participant (nom, prenom, poste, reponse, temps) 
                          VALUES (:nom, :prenom, :poste, :reponse, :temps)");
    
    $req->execute([
        'nom'      => $nom,
        'prenom'   => $prenom,
        'poste'    => $poste,
        'reponse'  => $score,
        'temps'    => $tempsFinal,
    ]);

    // Affichage du résultat à l'écran
    echo "<h1>Résultat pour $prenom $nom</h1>";
    echo "<p>Score : $score / 5</p>";
    echo "<p>Temps : " . gmdate('i:s' .$tempsFinal) . "</p>";
}
?>