<?php

session_start();

// Vérifie si l'utilisateur est déjà connecté
if (isset($_SESSION['user'])) {
    header('Location: bienvenue.php');
}

// Vérifie si le formulaire de connexion a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $_SESSION['user'] = $username;

    $_SESSION['login_time'] = time();

    // Redirige vers une page pour afficher un message d'accueil
    header('Location: bienvenue.php');
    exit();
}

include 'views3/login.view.php';

?>
