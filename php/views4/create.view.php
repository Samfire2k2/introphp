<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Créer module</title>
</head>
<body>
    <h1>Formulaire de recherche d'un module</h1>
    
    <form action="process4.php" method="post">
        <input type="search" name="Searchcode" placeholder="Code du module">
        <select name="Searchname" id="Searchname" >
            <option value="Comptabilité financière">Comptabilité financière</option>
            <option value="Ingénierie des exigences">Ingénierie des exigences</option>
            <option value="BD et Web">BD et Web</option>
        </select>
        <button type="submit">Valider</button>
    </form>
</body>
</html>