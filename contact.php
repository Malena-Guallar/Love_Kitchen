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
                            <label for="email">Your email</label>
                            <input type="email" name="email" id="email" />
                        </div>
                        <div>
                            <label for="message">Your message</label>
                            <textarea type ="message" name="message" placeholder="say smth" id="message"></textarea>
                        </div>
                        <div>
                            <label for="file" class="file">Your file</label>
                            <input type="file" class="file_control" id="screenshot" name="screenshot"/>
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