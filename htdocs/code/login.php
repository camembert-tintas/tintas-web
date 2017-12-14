<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tintas : Login</title>
</head>

<body>
<?php try {
    $bdd = new mysqli("mysql:host=localhost","root", "root", "game");
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
?>
<?php
$baseUrl = "monUrl.com";
$login = $_POST['login'];
$mdp = $_POST['password'];

if(true): ?>
    //si les logins sont erronées
    <?php
    header('Location: http://localhost/tintas-web/htdocs/index.php');
    exit();
    ?>
<?php else:?>
    //si les logins sont bons

<?php endif; ?>

</body>
