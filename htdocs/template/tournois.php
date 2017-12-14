<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../skin/css/style.css"/>
    <link rel="stylesheet" href="../skin/css/index.css"/>
    <link rel="stylesheet" href="../skin/css/tournoi.css"/>
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
        <h1>Accueil</h1>
    </div>
    <nav>
        <div><a href="accueil.php">Accueil</a></div>
        <div><a href="regles.php">Règles</a></div>
        <div><a href="mesScores.php">Mes scores</a></div>
        <div><a href="#" >Tournois</a></div>
        <div><a href="telechargement.php" >Telecharger le jeu</a></div>
        <div><a href="#">Deconnexion</a></div>
    </nav>
</header>
<main>
    <div class="tournoi">
        <?php
        $login = $_SESSION['login'];
        $sqlAdulte = "SELECT player.login, games.games_id, games.player_score, games.player_win 
            FROM games INNER JOIN player 
            WHERE player.id = games.player_id AND player.age>=18
            ORDER BY games.player_score DESC";
        $gamesAdulte = $bdd->query($sqlAdulte);
        if ($gamesAdulte->num_rows == 0): ?>
            <div class="no_one">
                <p>Aucun adulte n'a encore jouer...</p>
            </div>
        <?php else: ?>
            <div class="resultats"><p>Tables des scores Adulte</p></div>
            <div class="table">
                <div class="intitule">
                    <div><p>Place</p></div>
                    <div><p>Login</p></div>
                    <div><p>Identifiant partie</p></div>
                    <div><p>Score</p></div>
                    <div><p>Gagné ?</p></div>
                </div>
                <?php $i = 1; ?>
                <?php while ($row = $gamesAdulte->fetch_assoc()) {
                    ?>
                    <div>
                        <div><p <?php if($row["login"] == $login): echo 'class="me"'; endif; ?>><?php echo $i; ?></p></div>
                        <div><p <?php if($row["login"] == $login): echo 'class="me"'; endif; ?>><?php echo $row["login"] ?></p></div>
                        <div><p <?php if($row["login"] == $login): echo 'class="me"'; endif; ?>><?php echo $row["games_id"] ?></p></div>
                        <div><p <?php if($row["login"] == $login): echo 'class="me"'; endif; ?>><?php echo $row["player_score"] ?></p></div>
                        <div><p <?php if($row["login"] == $login): echo 'class="me"'; endif; ?>><?php if ($row["player_win"] == 1): echo 'gagné'; else: echo 'perdu'; endif; ?></p></div>
                        <?php $i++; ?>
                    </div>
                    <?php
                }
                ?>
            </div>
        <?php endif; ?>

        <?php
        $login = $_SESSION['login'];
        $sqlAdulte = "SELECT player.login, games.games_id, games.player_score, games.player_win 
            FROM games INNER JOIN player 
            WHERE player.id = games.player_id AND player.age<18
            ORDER BY games.player_score DESC";
        $gamesAdulte = $bdd->query($sqlAdulte);
        if ($gamesAdulte->num_rows == 0): ?>
        <div class="no_one">
            <p>Aucun enfant n'a encore jouer...</p>
        </div>
        <?php else: ?>
        <div class="resultats"><p>Tables des scores Enfant</p></div>
        <div class="table">
            <div class="intitule">
                <div><p>Place</p></div>
                <div><p>Login</p></div>
                <div><p>Identifiant partie</p></div>
                <div><p>Score</p></div>
                <div><p>Gagné ?</p></div>
            </div>
            <?php $i = 1; ?>
                <?php while ($row = $gamesAdulte->fetch_assoc()) {
            ?>
            <div>
                <div><p <?php if($row["login"] == $login): echo 'class="me"'; endif; ?>><?php echo $i; ?></p></div>
                <div><p <?php if($row["login"] == $login): echo 'class="me"'; endif; ?>><?php echo $row["login"] ?></p></div>
                <div><p <?php if($row["login"] == $login): echo 'class="me"'; endif; ?>><?php echo $row["games_id"] ?></p></div>
                <div><p <?php if($row["login"] == $login): echo 'class="me"'; endif; ?>><?php echo $row["player_score"] ?></p></div>
                <div><p <?php if($row["login"] == $login): echo 'class="me"'; endif; ?>><?php if ($row["player_win"] == 1): echo 'gagné'; else: echo 'perdu'; endif; ?></p></div>
                <?php $i++; ?>
            </div>
            <?php
            }
            ?>
        </div>
        <?php endif; ?>
    </div>
</main>
<footer>
    <p><span>Ce jeu a été réalisé par :</span><br/>Océane Rousseeuw<br/>Maxime Sauvage<br/>Bryan Sandras<br/>Vincent Persyn<br/>Benoît Verhaghe</p>
</footer>
</body>