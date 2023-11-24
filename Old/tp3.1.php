<!DOCTYPE html>
<html>
<head>
  <title>Jeu du nombre mystère</title>
</head>
<body>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <h1>Deviner le nombre mystère</h1>
  <p>Je pense à un nombre mystère. Vous avez 10 essais au total pour le deviner !</p>
  <form action="tp3.1.php" method="POST">
    <label for="proposition">Quelle est ta proposition? :</label>
    <input type="number" name="proposition" id="proposition" min="0" max="100">
    <button type="submit" class="btn btn-success">Deviner</button>
  </form>
</html>
<?php

session_start();

    if(!isset($_SESSION['mystere'])){
        $_SESSION['mystere'] = rand(0, 100);
        $_SESSION['coupsrest'] = 11;
        $_SESSION['coupseff'] = 0;
    }   

    if (isset($_POST['proposition'])) {
      if ($_SESSION['coupsrest'] >= 0) {
      $_SESSION['coupsrest']--;
      $_SESSION['coupseff']++;

      $prop = $_POST['proposition'];
      if ($prop == $_SESSION['mystere']) {
        echo "Bravo, vous avez trouvé le nombre mystère " .$_SESSION['mystere'], " en " .$_SESSION['coupseff'], " coup(s) ! <br> ";
        session_unset();
      } else if ($prop < $_SESSION['mystere']) 
      { 
      echo '<span style="color: #003efe">'."Inférieur au nombre mystère.".'</span><br>'; 
      } else if ($prop > $_SESSION['mystere']) 
      {
      echo '<span style="color: #e70000">'."Supérieur au nombre mystère.".'</span><br>';
      } else {
        echo "Désolé, vous avez épuisé tous vos coups. Le nombre mystère était $_SESSION[mystere]<br>";

        session_unset();
      }
    }
     
  }
  
  echo "Il vous reste ".$_SESSION['coupsrest']." essai(s)<br>";

  
  ?>

</body>
</html>
