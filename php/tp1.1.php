<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nombre Pair|Impair</title>
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
            </div>
        </div>
    </nav>
    <br>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Pair ou impair ?</th>
                    <th>Premier ?</th>
                </tr>
            </thead>
            <tbody>
                <?php
                function Prime($n)
                {
                    if ($n < 2) {
                        return false;
                    }
                    for ($i = 2; $i <= sqrt($n); $i++) {
                        if ($n % $i == 0) {
                            return false;
                        }
                    }
                    return true;
                }

                for ($i = 1; $i <= 10; $i++) {
                    if ($i % 2 == 0) {
                        $pairImpair = 'Pair';
                    } else {
                        $pairImpair = 'Impair';
                    }

                    if (Prime($i)) {
                        $prime = 'Oui';
                    } else {
                        $prime = 'Non';
                    }

                    echo "<tr><td>$i</td><td>$pairImpair</td><td>$prime</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
