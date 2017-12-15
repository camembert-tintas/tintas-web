<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../skin/css/style.css"/>
    <link rel="stylesheet" href="../skin/css/index.css"/>
    <link rel="stylesheet" href="../skin/css/telechargement.css"/>
    <title>Tintas : Tournoi</title>
</head>
<body class="index">
<?php
$bdd = new mysqli("localhost", "tintas-sql", "tintas-sql", "tintas");
if ($bdd->connect_errno) {
    printf("Échec de la connexion : %s\n", $bdd->connect_error);
    exit();
}
?>
<header>
    <div class="title">
        <h1>Téléchargement</h1>
    </div>
    <nav>
        <div><a href="accueil.php">Accueil</a></div>
        <div><a href="regles.php">Règles</a></div>
        <div><a href="mesScores.php">Mes scores</a></div>
        <div><a href="tournois.php" >Tournois</a></div>
        <div><a href="#" >Telecharger le jeu</a></div>
        <div><a href="#">Deconnexion</a></div>
    </nav>
</header>
<main>
    <div class="telechargement">
        <h2>Pour jouer, télécharger le fichier .zip ci dessous et suivez les instructions !</h2>
        <p><a href="../skin/files/game.zip" download="game">Télécharger</a></p>
    </div>
    <div class="instructions">
        <h2>Instructions:</h2>
        <p>bla</p>
        <p>bla</p>
        <p>et re bla</p>
    </div>
</main>
<footer>
    <p><span>Ce jeu a été réalisé par :</span><br/>Océane Rousseeuw<br/>Maxime Sauvage<br/>Bryan Sandras<br/>Vincent Persyn<br/>Benoît Verhaghe</p>
</footer>
</body>
