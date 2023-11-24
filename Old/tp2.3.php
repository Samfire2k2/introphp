<html>
  <title>Calculatrice</title>

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
<h3>
		Calculatrice
</h3>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<form method="post" action="tp2.3.php">
    <label for="num1">Entre le premier nombre : </label>
    <input type="number" name="num1" id="num1">
    <br>
    <label for="num2">Entre le deuxième nombre : </label>
    <input type="number" name="num2" id="num2">
    <br>
    <label for="operation">Select operation:</label>
    <select name="operation" id="operation">
    <option value="add">Addition</option>
    <option value="subtract">Soustraction</option>
    <option value="multiply">Multiplication</option>
    <option value="divide">Division</option>
    <option value="squareRoot">Racine Carrée</option>
    <option value="exponent">Exposant</option>
    </select>
  <br>
    <button type="submit" class="btn btn-success">Calculer</button>
</form>

<?php
class Calculator {
  private $num1;
  private $num2;

  public function __construct($num1, $num2) {
      if(!is_numeric($num1) || !is_numeric($num2)){
          throw new Exception("Les valeurs doivent être numériques.");
      }
      $this->num1 = $num1;
      $this->num2 = $num2;
  }

  public function add() {
      return $this->num1 + $this->num2;
  }

  public function subtract() {
      return $this->num1 - $this->num2;
  }

  public function multiply() {
      return $this->num1 * $this->num2;
  }

  public function divide() {
      if($this->num2 == 0){
          throw new Exception("On ne peut diviser par zéro !");
      }
      return $this->num1 / $this->num2;
  }
}

class CalcAdvanced extends Calculator {
  public function squareRoot() {
      if($this->num1 < 0){
          throw new Exception("On ne peut calculer la racine carrée d'un nombre négatif !");
      }
      return sqrt($this->num1);
  }

  public function exponent() {
      return pow($this->num1, $this->num2);
  }
}

try {
  $calculator = new Calculator($_POST['num1'], $_POST['num2']);
  $operation = $_POST['operation'];
  switch ($operation) {
      case "add":
          $result = $calculator->add();
          break;
      case "subtract":
          $result = $calculator->subtract();
          break;
      case "multiply":
          $result = $calculator->multiply();
          break;
      case "divide":
          $result = $calculator->divide();
          break;
      case "squareRoot":
          $calcAdvanced = new CalcAdvanced($_POST['num1'], $_POST['num2']);
          $result = $calcAdvanced->squareRoot();
          break;
      case "exponent":
          $calcAdvanced = new CalcAdvanced($_POST['num1'], $_POST['num2']);
          $result = $calcAdvanced->exponent();
          break;
      default:
          throw new Exception("Aucune opération sélectionnée.");
  }
  echo "Résultat: " . $result;
} catch (Exception $e) {
  echo 'Erreur: ' . $e->getMessage();
}
?>

</html>