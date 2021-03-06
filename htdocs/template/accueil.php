<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../skin/css/style.css"/>
    <link rel="stylesheet" href="../skin/css/index.css"/>
    <link rel="stylesheet" href="../skin/css/accueil.css"/>
    <title>Tintas : Accueil</title>
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
        <h1>Accueil</h1>
    </div>
    <nav>
        <div><a href="#">Accueil</a></div>
        <div><a href="regles.php">Règles</a></div>
        <div><a href="mesScores.php">Mes scores</a></div>
        <div><a href="tournois.php" >Tournois</a></div>
        <div><a href="telechargement.php" >Telecharger le jeu</a></div>
        <div><a href="#">Deconnexion</a></div>
    </nav>
</header>
<main>
    <div class="accueil">
        <img src="../skin/images/tintas.png" alt="image plateau"/>
        <div><p>TINTAS</p></div>
    </div>
</main>
<footer>
    <p><span>Ce jeu a été réalisé par :</span><br/>Océane Rousseeuw<br/>Maxime Sauvage<br/>Bryan Sandras<br/>Vincent Persyn<br/>Benoît Verhaghe</p>
</footer>
</body>
