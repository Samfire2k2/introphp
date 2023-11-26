<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Créer module</title>
</head>
<body>
    <h1>Formulaire de création d'un Module</h1>
    
    <form action="process.php" method="post">
        <label for="code">Code :</label>
        <input type="text" name="code" required><br>

        <label for="nom">Nom :</label>
        <input type="text" name="nom" required><br>

        <label for="responsable">Responsable :</label>
        <input type="text" name="responsable" required><br>

        <label for="email_responsable">Email du Responsable :</label>
        <input type="email" name="email_responsable" required><br>

        <label for="cm">Nombre d'heures de CM :</label>
        <input type="text" name="cm" required><br>

        <label for="td">Nombre d'heures de TD :</label>
        <input type="text" name="td" required><br>

        <label for="tp">Nombre d'heures de TP :</label>
        <input type="text" name="tp" required><br>

        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
