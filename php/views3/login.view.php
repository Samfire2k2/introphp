<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'authentification</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

    <h2>Formulaire d'authentification</h2>

    <form class="form" action="login.php" method="post">
        <label for="email">Email :</label><br>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="password">Mot de passe :</label><br>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Login</button>
    </form>

</body>
</html>
