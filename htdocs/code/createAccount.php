<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="skin/css/style.css"/>
    <link rel="stylesheet" href="skin/css/index.css"/>
    <title>Tintas : Login</title>
</head>
<body class="index">
<?php try {
    $bdd = new PDO('mysql:host=localhost;dbname=game;charset=utf8', 'root', 'root');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
?>
<?php $login = $_POST['login'];
$mdp = $_POST['password'];
$email = $_POST['email'];
?>
<?php
$bdd->exec('INSERT INTO player(login, mdp, email) VALUES($login, $mdp, $email)');
echo 'Le jeu a bien été ajouté !';
