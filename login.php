<style>
    <?php include('login.css'); ?>
    <?php include('index.css'); ?>
</style>

<?php include('bdd.php'); ?>


<?php
    if (isset($_POST['email']) && isset($_POST['password'])) {
        foreach ($users as $user){
            if (
                $user['email'] == $_POST['email'] &&
                $user['password'] == $_POST['password']
            ) {
                $loggedUser = ['email' => $user['email'],];
            } else {
                $errorMessage = sprintf('wrong infos love');
            }
        }
    }
?>    


<?php if (!isset($loggedUser)): ?>
    <div class="connexion_box">
        <form class="connexion" action="index.php" method="post">
            <?php if (isset($errorMessage)): ?>
                <div class="alert_error" role="alert">
                    <?php echo $errorMessage ?>
                </div>
            <?php endif; ?>
            <div class="email">
                <label>your email</label>
                <br></br>
                <input type="email" name="email" class="email_input" id="email"/>
            </div>
            <div class="password">
                <label>your password</label>
                <br></br>
                <input type="password" name="password" class="password_input" id="password"/>
            </div>
            <div class="btn_container">
            <button class="btn" type="submit">Send</button>
            </div>

        </form>
    </div>

<?php else: ?>
    <div class="alert_container">
        <div class="alert_success" role="alert">
            <p>♥ ♥ ♥</p>
            <p>welcome to Love Kitchen Recipes'</p>
            <p>find all recipes below or</p>
            <p><a href="add.php">add a recipe</a></p>
            <p>♥ ♥ ♥</p>

        </div>
    </div>
<?php endif; ?>
