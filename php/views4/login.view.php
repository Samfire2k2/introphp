<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'authentification</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

    <h5><u>Formulaire d'authentification</u></h5>

    <form class="form" action="login.php" method="post">
        <div class="mb-3">
            <label for="email" class="form-label">Email :</label><br>
            <input type="email" class="form-control" id="email" name="email" required>
            <br>
        </div>
        <div class="mb-3">    
            <label for="password" class="form-label">Mot de passe :</label><br>
            <input type="password" class="form-control" id="password" name="password" required>
            <br>
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>

</body>
</html>
