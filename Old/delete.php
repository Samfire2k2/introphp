<!DOCTYPE html>
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">TPs - Introduction au PHP</a>
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
    <title>Base de données</title>
</head>
<body>
    <a href="tp4.php"><h3>Gestion des utilisateurs</h3></a>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <br>
    <nav class="navbar navbar-expand-sm bg-light navbar-dark">
  <form class="form-inline" action="search.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Rechercher un utilisateur">
    <button class="btn btn-info" type="submit">Rechercher</button>
  </form>
</nav> 
            <table class="table">

    <thead class ="thead-light">
    <br>  
    <tr>
      <th>#</th>
      <th>Prénom</th>
        <th>Nom</th>
        <th>Contact</th>
        <th>Adresse</th>
        <th>Date d'inscription</th>
        <th>Editer</th>
        <th>Supprimer</th>
</thead>
    <a href="insert.php" class="btn btn-success" role="button">Ajouter un utilisateur</a>
    <br>
</body>

<?php

try {
    $pdo = new PDO(
        'mysql:host=127.0.0.1;dbname=PHP', //ne pas mettre le port, ça bugue
//        'PHP',
//        'PHP'
          'root', //Connexion BD PC Portable
          'root'
          
    );
    echo "<br>";
    echo '<span style="color: #00cf37">'."Connecté avec la base de données.".'</span><br>';
} catch (PDOException $e) {
    echo "<br>";
    echo "<br>";
    echo '<span style="color: #e70000">'."Echec de connexion ! ".'</span><br>';

}
          
function lireData($pdo) {
    $sql = "SELECT * FROM users";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}

$data = lireData($pdo);

foreach ($data as $row) {
    echo "<tr>";
    echo "<th scope='row'>" . $row['id'] . "</th>";
    echo "<th scope='row'>" . $row['Prenom'] . "</th>";
    echo "<th scope='row'>" . $row['Nom'] . "</th>";
    echo "<th scope='row'>" . $row['Contact'] . "</th>";
    echo "<th scope='row'>" . $row['Adresse'] . "</th>";
    echo "<th scope='row'>" . $row['InscriptionDate'] . "</th>";
    echo "<th> <a href='update.php' button class='btn btn-primary' role=button?id=" . $row['id'] . "'>/</a> </td>";
    echo "<th> <a href='delete.php' button class='btn btn-danger' role=button?id=" . $row['id'] . "'>X</a> </td>";
//    echo "<td> <a href='delete.php?id=" . $row['id'] . "'>Supprimer</a> </td>";
//    <a href="insert.php" class="btn btn-success" role="button">Ajouter un utilisateur</a>
    echo "</tr>"; }

//function deleteData($pdo, $id) {
  if(isset($row['id'])) {
    $sql = "DELETE FROM users WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$row['id']]);
  }
//}
//deleteData($pdo, 1);
$result = $stmt;
if($result) {
    echo '<br>';
    echo '<span style="color: #00cf37">'."Les informations ont été supprimées avec succès. ".'</span><br>';
} else{
    echo '<br>';
    echo '<span style="color: #e70000">'."Informations non supprimées. ".'</span><br>';


}

?>

</html>