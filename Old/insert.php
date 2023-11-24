<html>
<html lang="en">
<head>
    <meta charset="UTF-8">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand" href="menu.php">TPs - Introduction au PHP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Série 1
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="tp1.1.php">Exercice 1</a></li>
            <li><a class="dropdown-item" href="tp1.2.php">Exercice 2</a></li>
            <li><a class="dropdown-item" href="tp1.3.php">Exercice 3</a></li>
            <li><a class="dropdown-item" href="tp1.4.php">Exercice 4</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Série 2
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="tp2.1.php">Exercice 1</a></li>
            <li><a class="dropdown-item" href="tp2.2.php">Exercice 2</a></li>
            <li><a class="dropdown-item" href="tp2.3.php">Exercice 3</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Série 3
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="tp3.1.php">Exercice 1</a></li>
            <li><a class="dropdown-item" href="tp3.2.php">Exercice 2</a></li>
            <li><a class="dropdown-item" href="tp3.3.php">Exercice 3</a></li>
            <li><a class="dropdown-item" href="tp3.4.php">Exercice 4</a></li>
            <li><a class="dropdown-item" href="tp3.5.php">Exercice 5</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Série 4
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="index.php">Exercice 1</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br>
<figure class="text-center"><small class="text-muted">Travail réalisé par </small>RAVARD Samuel<small class="text-muted"> et </small>DIALLO Boubacar</figure>
<br>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<head>
    <title>Ajout d'utilisateurs</title>
</head>
<body>
    <h3>Ajout d'utilisateurs</h3>
    <br>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<form action="insert.php" method="post">
    <label for="id"># (ID) : </label>
    <input type="number" id="id" name="id"required>
    <label for="Prenom">     Prénom : </label>
    <input type="text" id="Prenom" name="Prenom"required>
    <label for="Nom">    Nom : </label>
    <input type="text" id="Nom" name="Nom"required><br>
    <label for="Email">Email :</label>
    <input type="email" id="Email" name="Email"required>
    <label for="Contact">     Contact</label>
    <input type="tel" id="Contact" name="Contact"required><br>
    <label for="Adresse">Adresse : </label>
    <input type="text" id="Adresse" name="Adresse">
    <label for="InscriptionDate">Date d'inscription (YYYY-MM-DD) : </label>
    <input type="datetime-local" id="InscriptionDate" name="InscriptionDate">
    <button type="submit" class="btn btn-primary">Valider les informations</button>
    <a href="tp4.php" class="btn btn-secondary" role="button">Revenir à l'accueil</a>

</form>
<?php

try {
    $pdo = new PDO(
        'mysql:host=127.0.0.1;dbname=PHP', //ne pas mettre le port, ça bugue
//        'PHP',
//        'PHP'
          'root', //Connexion BD PC Portable
          'root'
    );
} catch (PDOException $e) {
    echo "<br>";
    echo "<br>";
    echo '<span style="color: #e70000">'."Echec de connexion ! ".'</span><br>';
    exit();

}


    $id=$_POST['id'];
    $prenom=$_POST['Prenom'];
    $nom=$_POST['Nom'];
    $email=$_POST['Email'];
    $contact=$_POST['Contact'];
    $adresse=$_POST['Adresse'];
    $inscriptionDate=$_POST['InscriptionDate'];

$result = NULL;


    $sql = "INSERT INTO Users (id, Prenom, Nom, Email, Contact, Adresse, InscriptionDate) VALUES (:id, :Prenom, :Nom, :Email, :Contact, :Adresse, :InscriptionDate)";
    $stmt = $pdo->prepare($sql);

    $stmt->bindValue(':id',$id);
    $stmt->bindValue(':Prenom',$prenom);
    $stmt->bindValue(':Nom',$nom);
    $stmt->bindValue(':Email',$email);
    $stmt->bindValue(':Contact',$contact);
    $stmt->bindValue(':Adresse',$adresse);
    $stmt->bindValue(':InscriptionDate',$inscriptionDate);

    $result = $stmt->execute();


if($result) {
    echo '<span style="color: #00cf37">'."Les informations ont été ajoutées avec succès. ".'</span><br>';
} else{
    echo '<span style="color: #e70000">'."Informations non ajoutées. ".'</span><br>';


}
?>

</html>