<style>
    <?php include('index.css'); ?>
</style>

<!DOCTYPE html>
<html>
    <head>
        <title>Love Kitchen Recipes'</title>
        <meta charset="utf-8" />
    </head>
    <body class="body">
        <?php include_once('functions.php'); ?> 

        <header>
            <?php include_once('header.php'); ?>
        </header>  
        
        <?php include_once('login.php'); ?>
        <?php if (isset($loggedUser)): ?>

        <div class="recipes_container" >
        <?php include_once('bdd.php'); ?>

            <?php foreach ($recipes as $recipe) : ?>
                        <article>
                            <h3><?php echo $recipe['title']; ?></h3>
                            <a href="recettes.php?recipe_id=<?php echo $recipe['recipe_id']; ?>">
                                <button>la recette ici</button>
                            </a>
                            
                        </article>

            <?php endforeach; ?>   
            <?php endif; ?> 
        </div>



        <footer>
            <?php include_once('footer.php'); ?>
        </footer>

    </body>
</html>