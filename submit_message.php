<style>
        <?php include_once('contact.css'); ?>
        <?php include_once('index.css'); ?>
        <?php include_once('submit_message.css'); ?> 

    </style>



<?php

$email = $_POST['email'];

        if (!isset($_POST['email']) 
        || !isset($_POST['message']))

        {
            echo ("<br>");
            echo('Il faut des entrées valides pour soumettre le formulaire bb <3');
            
            return;
        }

        $email = $_POST['email'];
        $message = $_POST['message'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>

    <header>
        <?php include_once('header.php'); ?>
    </header>

    <div class="received_message">
        <h1>Message bien reçu !</h1>
                
        <div class="card">
            
            <div class="card-body">
                <h5 class="card-title">Rappel de vos informations </h5>
                <p class="card-text"><b>Email</b> : <?php echo $_POST['email']; ?></p>
                <p class="card-text"><b>Message</b> : <?php echo strip_tags($message); ?></p>
            </div>
        </div>
    </div>

    <footer>
        <?php include_once('footer.php'); ?>
    </footer>

</body>
</html>



