<style>
    
    <?php include('index.css'); ?>
    <?php include('recettes.css'); ?>

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

    <div class="recipe_container">

    <?php include_once('bdd.php'); ?>

    <?php

        $recipeID = $_GET['recipe_id'];
        $recipeName = $_GET['title'];
        $recipeAuthor = $_GET['author'];
        $recipeDetails = $_GET['recipe'];

        echo "<h1>$recipeName</h1>";
        echo "<p>by $recipeAuthor</p>";
        echo '<div class="title">La recette :</div>';
        echo "<p>$recipeDetails</p>";

    ?>
    </div>

</body>
</html>