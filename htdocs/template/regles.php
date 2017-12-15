<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../skin/css/style.css"/>
    <link rel="stylesheet" href="../skin/css/index.css"/>
    <link rel="stylesheet" href="../skin/css/regles.css"/>
    <title>Tintas : Regles</title>
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
        <h1>Règles</h1>
    </div>
    <nav>
        <div><a href="accueil.php">Accueil</a></div>
        <div><a href="#">Règles</a></div>
        <div><a href="mesScores.php">Mes scores</a></div>
        <div><a href="tournois.php">Tournois</a></div>
        <div><a href="telechargement.php">Telecharger le jeu</a></div>
        <div><a href="#">Deconnexion</a></div>
    </nav>
</header>
<main>
    <div class="regles">
        <h2>Règles du jeu :</h2>
        <div class="instructions">
            <p>Le joueur qui récupère les 7 pièces de même couleur gagne le jeu</p>
            <p>Le premier joueur est tiré au sort. Il obtient le pion.</p>
            <p>Le premier joueur place le pion sur un hexagone de son choix, prend le pion qui se trouve là et le place devant lui.
                Cela termine son tour de jeu.</p>
            <p>A partir de maintenant, le joueur actif doit déplacer le pion dans l'une des six directions possibles. Le
                cas échéant, à travers les espaces inoccupés - jusqu'à ce qu'il atteigne un espace occupé. Il
                recueille la pièce de jeu se trouvant sur cet espace et place le pion là.</p>
            <p>S'il peut récolter une autre pièce de la même couleur en continuant à déplacer le pion, le joueur actif peut
                continuer jusqu'à ce qu'il ne soit plus capable ou désireux de collecter une autre pièce de même couleur.</p>
            <p>Si un joueur n'a aucune possibilité de se déplacer parce que le pion n'est pas aligné avec un espace occupé, il doit sauter le pion
                dans n'importe quel espace et récupérer la pièce qui s'y trouve. Comme auparavant, il
                laisse le pion sur cet espace, et son tour se termine.</p>
            <p>Si un joueur a rassemblé les sept pièces d'une couleur, il gagne immédiatement.</p>
            <p>Sinon, le joueur qui a récolté quatre pièces ou plus sur au moins quatre couleurs à la fin du jeu gagne.</p>
        </div>
    </div>
</main>
<footer>
    <p><span>Ce jeu a été réalisé par :</span><br/>Océane Rousseeuw<br/>Maxime Sauvage<br/>Bryan Sandras<br/>Vincent
        Persyn<br/>Benoît Verhaghe</p>
</footer>
</body>