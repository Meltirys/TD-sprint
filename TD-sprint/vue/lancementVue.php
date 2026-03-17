<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php var_dump($qcm); ?> 
    <a href="<?= require RACINE . $qcm ?>">lancer le qcm</a>
    <a href="?action=accueil">Accueil</a>
</body>
</html>