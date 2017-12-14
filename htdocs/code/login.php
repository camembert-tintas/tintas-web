<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tintas : Login</title>
</head>

<body>
<?php try {
    $bdd = new PDO('mysql:host=localhost;dbname=game;charset=utf8', 'root', 'root');
    //$goodLog = $bdd->query('SELECT login FROM logins');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
?>
<?php
$baseUrl = "monUrl.com";
$login = $_POST['login'];
$mdp = $_POST['password'];

if(true): ?>
    <?php
    header('Location: http://localhost/tintas-web/htdocs/index.php');
    exit();
    ?>
<?php else:?>
    <?php
    if($login=='oceane') {
        $_SESSION['login'] = 'oceane';
        $_SESSION['mdp'] = 'coeur';
    }else{

        $_SESSION['login'] = 'maxime';
        $_SESSION['mdp'] = 'namour';
    }
    ?>
    <?php
    header('Location: http://localhost/tintas-web/htdocs/template/accueil.php');
    exit();
    ?>
<?php endif; ?>

</body>
