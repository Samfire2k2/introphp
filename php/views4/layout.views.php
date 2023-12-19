<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php
            // Assurez-vous que $param_vue est un tableau avant de l'extraire
            if (isset($param_vue) && is_array($param_vue)) {
                extract($param_vue);
            }
            ?>
            <h1 class="mt-5 text-left"><?= $titre ?></h1>
            <?php
            $name = "show";
            include("$name.view.php"); 
            ?>
        </div>
    </div>
</body>
</html>