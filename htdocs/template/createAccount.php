<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../skin/css/style.css"/>
    <link rel="stylesheet" href="../skin/css/index.css"/>
    <title>Tintas : Login</title>
</head>
<body class="index">
<?php try {
    $bdd = new PDO('mysql:host=localhost;dbname=game;charset=utf8', 'root', 'root');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
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
            <label for="email">Email :</label>
            <input type="email" name="email" id="email"/>
        </div>
        <div class="button">
            <button type="submit">S'inscrire</button>
        </div>
    </form>
</div>
</body>
</html>