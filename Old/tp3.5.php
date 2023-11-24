<!DOCTYPE html>
<html>
<head>
  <title>Formulaire d'authentification</title>    
</head>
<h3>Formulaire d'authentification</h3>
    <p>Merci de saisir votre adresse mail et votre mot de passe.</p>
    
<form action="tp3.5.1.php" method="POST">
    <label for="email">Email : </label>
    <input type="text" name="email" id="email"><br>
    <p></p>
    <label for="password">Mot de passe : </label>
    <input type="password" name="password" id="password"> 
    <!-- type="password" permet de cacher les caractères saisis par 
    l'utilisateur afin de ne pas les diffuser en clair -->
    <form action="tp3.5.1.php" method="POST">
    <input type="submit" value="Se connecter">

<?php

session_start();
if (isset($_POST['submit'])) {
  if (isset($_POST['email']) && isset($_POST['password'])) {
      header('Location: tp3.5.1.php');
      $_SESSION['login_time'] = time();
      exit;
    } 
    else {
      if (isset($error)) { 
          $error = 'Identifiants incorrects';
          echo $error; 
      }
    }
}
?>
</html>