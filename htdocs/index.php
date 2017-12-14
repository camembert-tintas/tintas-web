<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="skin/css/style.css"/>
    <link rel="stylesheet" href="skin/css/index.css"/>
    <title>Tintas : Login</title>
</head>
<body class="index">
<?php
$bdd = new mysqli("localhost", "root", "root", "game");
if ($bdd->connect_errno) {
    printf("Échec de la connexion : %s\n", $bdd->connect_error);
    exit();
}
?>
<div class="login">
    <h1>Pour accéder au jeu, veuillez vous connecter</h1>
    <form action="code/login.php" method="post">
        <div>
            <label for="login">Login :</label>
            <input type="text" name="login" id="login"/>
        </div>
        <div>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password"/>
        </div>
        <div class="button">
            <button type="submit">Connexion</button>
        </div>
    </form>
    <p>Pour créer un nouveau compte,<a href="template/createAccount.php">Cliquez ici</a></p>
</div>
</body>
</html>