<style>
    <?php include('index.css'); ?>
    <?php include('add.css'); ?>
</style>




    <header>
        <?php include_once('header.php'); ?>
    </header> 

    <div class="add_container">
        <form class="recipe_adding" method="post">

            <h2>add a recipe below</h2>
            <br/>
            <div class="name">
                <label>your name</label>
                <input id="name" class="name_input" name="name"/>
            </div>
            <br/>
            <div class="email">
                <label>your email</label>
                <input type="email" id="email" class="email_input" name="email"/>
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

        if (isset($_POST['email']) && isset($_POST['name']) && isset($_POST['recipe']) && !empty($_POST['email']) && !empty($_POST['name']) && !empty($_POST['recipe'])) {

        } else {
            $errorMessage = 'Veuillez remplir tous les champs svp' ;
        }

        ?>

<?php if (isset($errorMessage)): ?>
    <div class="alert_error" role="alert">
        <?php echo $errorMessage ?>
    </div>
<?php endif; ?>

<?php if (isset($_POST['email']) && isset($_POST['name']) && isset($_POST['recipe']) && !empty($_POST['email']) && !empty($_POST['name']) && !empty($_POST['recipe']) && !isset($errorMessage)): ?>
    <div class="alert_container">
        <div class="alert_success" role="alert">
            <p>♥ ♥ ♥</p>
            <p>thanks for your recipe</p>
            <p>♥ ♥ ♥</p>

        </div>
    </div>
<?php endif ?>

