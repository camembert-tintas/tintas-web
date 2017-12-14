<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../skin/css/style.css"/>
    <link rel="stylesheet" href="../skin/css/index.css"/>
    <title>Tintas : Create account</title>
</head>
<body class="index"><h1>Création du compte</h1>
<?php ini_set('display_errors', 1);?>

<?php
    $bdd = new mysqli("localhost", "root", "root", "game");
if ($bdd->connect_errno) {
    printf("Échec de la connexion : %s\n", $bdd->connect_error);
    exit();
}
?>

<?php $login = $_POST['login'];
$mdp = $_POST['password'];
$email = $_POST['email'];
?>

<?php
$sql = "INSERT INTO player (login, password, email) VALUES ('$login', '$mdp', '$email')";

if ($bdd->query($sql) === TRUE) {
    header('Location: http://localhost/tintas-web/htdocs/template/accueil.php');
}else {
    echo 'erreur !' . $bdd->error;
}
mysqli_close($bdd);
?>

</body>
