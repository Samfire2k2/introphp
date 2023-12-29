<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tableau associatif</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">TPs - BD&Web</a>
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
                        </ul>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Série 2
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="index2.php">Exercice 1</a></li>
                        </ul>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Série 3
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="index3.php">Exercice 1</a></li>
                          <li><a class="dropdown-item" href="login.php">Login</a></li>
                        </ul>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Série 4
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="index4.php">Exercice 1</a></li>
            </ul>
    </div>
  </div>
</nav>
<br>

<figure class="text-center"><small class="text-muted">Travail réalisé par </small>RAVARD Samuel<small class="text-muted"> et </small>CHABANNIER Baptiste</figure>
<br>

<div class="container">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Code</th>
        <th>Nom</th>
        <th>Responsable</th>
        <th>CM</th>
        <th>TD</th>
        <th>TP</th>
        <th>Nombre de groupes de TD</th>
        <th>Nombre de groupes de TP</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $modules = array(
          array("Code" => "XLG5IE230", "Nom" => "Comptabilité financière", "Responsable" => "Christophe SUAUDEAU", "CM" => "0h", "TD" => "44h", "TP" => "0h", "Groupes_TD" => 5, "Groupes_TP" => 3),
          array("Code" => "XLG5IE020", "Nom" => "Ingénierie des exigences", "Responsable" => "Géraldine JEAN", "CM" => "13h20", "TD" => "22h40", "TP" => "8h", "Groupes_TD" => 4, "Groupes_TP" => 2),
          array("Code" => "XLG5IU260", "Nom" => "BD et Web", "Responsable" => "Laura MONCEAUX", "CM" => "0h", "TD" => "24h", "TP" => "16h", "Groupes_TD" => 6, "Groupes_TP" => 5),
        );

        foreach ($modules as $cours) {
          echo "<tr>";
          echo "<td>" . $cours["Code"] . "</td>";
          echo "<td>" . $cours["Nom"] . "</td>";
          echo "<td>" . $cours["Responsable"] . "</td>";
          echo "<td>" . $cours["CM"] . "</td>";
          echo "<td>" . $cours["TD"] . "</td>";
          echo "<td>" . $cours["TP"] . "</td>";
          echo "<td>" . $cours["Groupes_TD"] . "</td>";
          echo "<td>" . $cours["Groupes_TP"] . "</td>";
          echo "</tr>";
        }
      ?>
    </tbody>
  </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
