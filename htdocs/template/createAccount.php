<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../skin/css/style.css"/>
    <link rel="stylesheet" href="../skin/css/index.css"/>
    <title>Tintas : Login</title>
</head>
<body class="index">
<?php
$bdd = new mysqli("localhost", "tintas-sql", "tintas-sql", "tintas");
if ($bdd->connect_errno) {
    printf("Échec de la connexion : %s\n", $bdd->connect_error);
    exit();
}
?>
<div class="login">
    <h1>Créer un nouveau compte : </h1>
    <form action="../code/createAccount.php" method="post">
        <div>
            <label for="login">Login :</label>
            <input type="text" name="login" id="login"/>
        </div>
        <div>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password"/>
        </div>
        <div>
            <label for="verifpassword">Verification of password :</label>
            <input type="password" name="verifpassword" id="password"/>
        </div>
        <div>
            <label for="age">Age :</label>
            <input type="text" name="age" id="age"/>
        </div>
        <div>
            <label for="email">Email :</label>
            <input type="email" name="email" id="email"/>
        </div>
        <div class="button">
            <button type="submit">S'inscrire</button>
        </div>
    </form>
    <a href="../index.php">Retour à l'accueil</a>
</div>
</body>
</html>