<?php
    session_start();

    if (!isset($_SESSION['user'])) {
        header('Location: login.php');
        exit();
    }
    $sessionactuelle = $_SESSION['user'];
    $loginTime = $_SESSION['login_time'];
    $tpsActuel = time();
    $tpsEcoule = $tpsActuel - $loginTime;
    $minutes = floor($tpsEcoule / 60); //arrondir un nb à la valeur entière inférieure la plus proche
    $secondes = $tpsEcoule % 60;
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bienvenue</title>
    </head>
    <body>
        <p>Bonjour <?php echo htmlspecialchars($sessionactuelle); ?>! Vous avez visité cette page la première fois il y a <?php echo $minutes; ?> minutes et <?php echo $secondes; ?> secondes.</p>
        <p>Vous pouvez vous déconnecter en cliquant <a href="logout.php">ici</a>.</p>
    </body>
    </html>