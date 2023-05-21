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
    
        $recipeID = $_GET['recipe_id'];
        $recipeName = $_GET['title'];
        $recipeAuthor = $_GET['author'];
        $recipeDetails = $_GET['recipe'];


        echo "<h1>$recipeName</h1>";
        echo "<p>by $recipeAuthor</p>";
        echo '<p>La recette :</p>';
        echo "<p>$recipeDetails</p>";

    ?>

</body>
</html>