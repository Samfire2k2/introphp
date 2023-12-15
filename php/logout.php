<?php
session_start();

// Efface le cookie de session
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000
    );
}

session_destroy();

header("Location: login.php");
exit();
?>
