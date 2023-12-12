<?php

session_start();

// Vérifier si l'utilisateur est déjà connecté
if (isset($_SESSION['user'])) {
    // Rediriger vers une page sécurisée ou afficher un message d'accueil
    header('Location: dashboard.php'); // Remplacez dashboard.php par la page de destination
    exit();
}

// Vérifier si le formulaire de connexion a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Ajouter votre logique d'authentification ici
    // Par exemple, vérifier les informations d'authentification dans une base de données

    // Si l'authentification réussit, enregistrez l'utilisateur dans la session
    $_SESSION['user'] = $username;

    // Enregistrez l'heure de la connexion dans la session
    $_SESSION['login_time'] = time();

    // Rediriger vers une page sécurisée ou afficher un message d'accueil
    header('Location: dashboard.php'); // Remplacez dashboard.php par la page de destination
    exit();
}

// Afficher la vue de connexion
include 'login.view.php';

?>
