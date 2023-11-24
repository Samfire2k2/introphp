<html>
  <title>Tableaux</title>
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

<?php

$auteurs = array("Steinbeck","Kafka", "Tolkien", "Dickens", "Milton", "Orwell");
$livres = array(
    array("livre 1 :", "The Hobbit", 2, 1937),
    array("livre 2 :", "The Grapes of Wrath", 0, 1939),
    array("livre 3 :", "A Tale of Two Cities", 3, 1859),
    array("livre 4 :", "Paradise Lost", 4, 1667),
    array("livre 5 :", "Animal Farm", 5, 1945),
    array("livre 6 :", "The Trial", 1, 1925)
);

for ($i=0; $i<count($livres); $i++) {
  $livres[$i][2] = $auteurs[$livres[$i][2]];
}

  echo "<pre>";  
  echo "<b>" .$livres[0][0]." </b><br>";
  echo " titre : " .$livres[0][1].",<br>";
  echo " auteurId : " .$livres[0][2].",<br>";
  echo " pubAnnee : " .$livres[0][3]."<br><br>";   
  echo "</pre>";

  echo "<pre>"; 
  echo "<b>" .$livres[1][0]." </b><br>";
  echo " titre : " .$livres[1][1].",<br>";
  echo " auteurId : " .$livres[1][2].",<br>";
  echo " pubAnnee : " .$livres[1][3]."<br><br>";
  echo "</pre>";

  echo "<pre>"; 
  echo "<b>" .$livres[2][0]." </b><br>";
  echo " titre : " .$livres[2][1].",<br>";
  echo " auteurId : " .$livres[2][2].",<br>";
  echo " pubAnnee : " .$livres[2][3]."<br><br>";
  echo "</pre>";

  echo "<pre>"; 
  echo "<b>" .$livres[3][0]." </b><br>";
  echo " titre : " .$livres[3][1].",<br>";
  echo " auteurId : " .$livres[3][2].",<br>";
  echo " pubAnnee : " .$livres[3][3]."<br><br>";
  echo "</pre>";

  echo "<pre>"; 
  echo "<b>" .$livres[4][0]." </b><br>";
  echo " titre : " .$livres[4][1].",<br>";
  echo " auteurId : " .$livres[4][2].",<br>";
  echo " pubAnnee : " .$livres[4][3]."<br><br>";
  echo "</pre>";

  echo "<pre>"; 
  echo "<b>" .$livres[5][0]." </b><br>";
  echo " titre : " .$livres[5][1].",<br>";
  echo " auteurId : " .$livres[5][2].",<br>";
  echo " pubAnnee : " .$livres[5][3]."<br><br>";
  echo "</pre>";
?>
</html>