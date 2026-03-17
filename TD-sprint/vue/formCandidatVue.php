<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Informations candidat</h1>
    <form action="" method="post">
        <input type="text" name="prenom" id="prenom" placeholder="Prénom">
        <input type="text" name="nom" id="nom" placeholder="Nom">
        <select name="choixQCM" id="choixQCM">
            <option value="dev">QCM pour développeur</option>
            <option value="testeur">QCM pour testeur</option>
            <option value="scrum">QCM pour Scrum Master</option>
        </select>
        <button type="submit">Valider</button>
        <a href="?action=accueil">Accueil</a>
    </form>
</body>
</html>