<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tintas : Login</title>
</head>

<body>
<?php
$bdd = new mysqli("localhost", "root", "root", "game");
if ($bdd->connect_errno) {
    printf("Échec de la connexion : %s\n", $bdd->connect_error);
    exit();
}
?>
<?php
$baseUrl = "monUrl.com";
$login = $_POST['login'];
$mdp = $_POST['password'];

$sql = "SELECT password FROM player WHERE login='$login'";
$findPassword = $bdd->query($sql);
$testPassword = $findPassword->fetch_row();

if($testPassword[0] == $mdp):
    $_SESSION['login'] = $login;
    $_SESSION['password'] = $mdp;
    //si les logins sont bons
    header('Location: https://www.vincentpersyn.fr/template/accueil.php');
    exit();
elseif($testPassword[0] == null):
    header('Location: https://www.vincentpersyn.fr/template/index.php');
else:
    //si les logins sont erronées
    header('Location: https://www.vincentpersyn.fr/template/index.php');
    exit();
endif; ?>
<?php mysqli_close($bdd); ?>
</body>
