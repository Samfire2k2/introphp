<?php
session_start();

if (isset($_SESSION['user'])) {
    header('Location: bienvenue.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Format d'email invalide.";
    } else {
        include 'inc3/config.php';

        if ($email === $config['email'] && $password === $config['password']) {
            $_SESSION['user'] = $email;
            $_SESSION['login_time'] = time();

            header('Location: bienvenue.php');
            exit();
        } else {
            $error = "Identifiants incorrects. Veuillez réessayer.";
        }
    }
}

include 'views3/login.view.php';
?>