<style>
    
    <?php include('index.css'); ?>

</style>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
</head>
<body>

    <header>
        <?php include_once('header.php'); ?>
    </header>   

    <?php include_once('bdd.php'); ?>

    <?php

    if (isset($_GET['recipe_id'])) {
        $recipeID = $_GET['recipe_id'];

        echo "<h1>Détails de la recette</h1>";
        echo "<p>ID de la recette : $recipeID</p>";
    } else {
        echo "pas d'ID";
    }

    ?>

</body>
</html>