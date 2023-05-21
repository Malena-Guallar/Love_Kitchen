<style>
    <?php include('contact.css'); ?>
    <?php include('index.css'); ?>

</style>

<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>


    <header>
        <?php include_once('header.php'); ?>
    </header>
        <div class="contact">
            <h1>Say something</h1>
                <form action="submit_message.php" method="POST" enctype="multipart/form-data">
                    <div class="contact_form">
                        <div>
                            <label for="email">your email</label>
                            <br>

                            <input type="email" name="email" id="email" />
                        </div>
                        </br>
                        <div>
                            <label for="message">your message</label>
                            <br>

                            <textarea type ="message" name="message" placeholder="say smth" id="message" rows=4 cols=50></textarea>
                        </div>
                    </div>
                    <button class="btn">Send</button>           
                </form>
        </div>

        <footer>
            <?php include_once('footer.php'); ?>
        </footer>
    
</body>
</html>