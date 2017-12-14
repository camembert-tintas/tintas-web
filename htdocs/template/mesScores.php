<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../skin/css/style.css"/>
    <link rel="stylesheet" href="../skin/css/index.css"/>
    <link rel="stylesheet" href="../skin/css/mesScores.css"/>
    <title>Tintas : Mes Scores</title>
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
        <h1>Accueil</h1>
    </div>
    <nav>
        <div><a href="accueil.php">Accueil</a></div>
        <div><a href="regles.php">Règles</a></div>
        <div><a href="#">Mes scores</a></div>
        <div><a href="tournois.php">Tournois</a></div>
        <div><a href="telechargement.php">Telecharger le jeu</a></div>
        <div><a href="#">Deconnexion</a></div>
    </nav>
</header>
<main>
    <div class="mes_scores">
        <?php
        $login = $_SESSION['login'];
        $sql = "SELECT player.login, games.games_id, games.player_score, games.player_win 
            FROM games INNER JOIN player 
            WHERE player.id = games.player_id AND player.login='$login' ";
        $games = $bdd->query($sql);
        if ($games->num_rows == 0): ?>
            <div><p>Vous n'avez pas encore de parties enregistrées, jouez des parties pour voir votre progression !</p>
            </div>
        <?php else: ?>
            <div><p>Tables des scores</p></div>
            <div class="table">
                <div class="intitule">
                    <div><p>Login</p></div>
                    <div><p>Identifiant partie</p></div>
                    <div><p>Score</p></div>
                    <div><p>Gagné ?</p></div>
                </div>
                <?php while ($row = $games->fetch_assoc()) {
                    ?>
                    <div>
                        <div><p><?php echo $row["login"] ?></p></div>
                        <div><p><?php echo $row["games_id"] ?></p></div>
                        <div><p><?php echo $row["player_score"] ?></p></div>
                        <div><p><?php if ($row["player_win"] == 1): echo 'gagné'; else: echo 'perdu'; endif; ?></p></div>
                    </div>
                    <?php
                }
                ?>
            </div>
        <?php endif;
        mysqli_close($bdd);
        ?>
    </div>
</main>
<footer>
    <p><span>Ce jeu a été réalisé par :</span><br/>Océane Rousseeuw<br/>Maxime Sauvage<br/>Bryan Sandras<br/>Vincent
        Persyn<br/>Benoît Verhaghe</p>
</footer>
</body>