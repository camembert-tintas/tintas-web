<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../skin/css/style.css"/>
    <link rel="stylesheet" href="../skin/css/index.css"/>
    <link rel="stylesheet" href="../skin/css/contact_boite.css"/>
    <title>Tintas : Tournoi</title>
</head>
<body class="index">
<?php
$bdd = new mysqli("localhost", "root", "root", "game");
if ($bdd->connect_errno) {
    printf("Échec de la connexion : %s\n", $bdd->connect_error);
    exit();
}
?>
<header>
    <div class="title">
        <h1>Récupérer ma boîte de jeu</h1>
    </div>
    <nav>
        <div><a href="accueil.php">Accueil</a></div>
        <div><a href="regles.php">Règles</a></div>
        <div><a href="mesScores.php">Mes scores</a></div>
        <div><a href="tournois.php">Tournois</a></div>
        <div><a href="telechargement.php">Telecharger le jeu</a></div>
        <div><a href="#">Deconnexion</a></div>
    </nav>
</header>
<main>
    <div class="boite">
        <h1>Pour récupérer votre boîte de jeu, envoyer vos coordonnées postales :</h1>
        <form action="accueil.php" method="post">
            <div>
                <label for="adresse">Adresse:</label>
                <input type="text" name="adresse" id="adresse"/>
            </div>
            <div>
                <label for="cp">Code Postal :</label>
                <input type="text" name="cp" id="cp"/>
            </div>

            <div>
                <label for="ville">Ville :</label>
                <input type="text" name="ville" id="ville"/>
            </div>
            <div class="button">
                <button type="submit">Envoyer</button>
            </div>
        </form>
    </div>
</main>
</body>