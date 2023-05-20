<style>
    <?php include('index.css'); ?>
    <?php include('add.css'); ?>
</style>

<?php include('bdd.php'); ?>

<?php 
    session_start();
    $loggedUser = $_SESSION['loggedUser'];
?>



    <header>
        <?php include_once('header.php'); ?>
    </header> 

    <div class="add_container">
        <form class="recipe_adding" method="post">

            <h2>add a recipe below</h2>
            <br/>
            <div class="name">
                <label>your name</label>
                <input type="name" id="name" class="name_input" name="name"/>
            </div>
            <br/>
            <div class="title">
                <label>title of recipe</label>
                <input type="title" id="title" class="title_input" name="title"/>
            </div>
            <br/>
            <div class="recipe">
                <label>your recipe</label>
                <textarea id="recipe" class="recipe_area" name="recipe" rows="10" cols="50"></textarea>
            </div>
            </br>
            <div class="btn_container">
                <button class="btn" type="submit">send</button>
            </div>
        </form>
    </div>


    <?php

        if (isset($_POST['name']) && isset($_POST['title']) && isset($_POST['recipe']) && !empty($_POST['name']) && !empty($_POST['title']) && !empty($_POST['recipe'])) {
            
            
            $title = $_POST['title'];
            $recipe = $_POST['recipe'];
            $name = $_POST['name'];

            $insertRecipe->execute([
                'title' => $title,
                'recipe' => $recipe,
                'author' => $name 
            ]);


        } else {
            $errorMessage = 'Veuillez remplir tous les champs svp' ;
        }

        ?>


<?php if (isset($errorMessage)): ?>
    <div class="alert_error" role="alert">
        <?php echo $errorMessage ?>
    </div>
<?php endif; ?>

<?php if (isset($_POST['title']) && isset($_POST['recipe']) && !empty($_POST['title']) && !empty($_POST['recipe']) && !isset($errorMessage)): ?>
    <div class="alert_container">
        <div class="alert_success" role="alert">
            <p>♥ ♥ ♥</p>
            <p>thanks for your recipe</p>
            <p>♥ ♥ ♥</p>

        </div>
    </div>
<?php endif ?>

