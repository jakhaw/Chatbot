<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Chatbot</title>
</head>
<body>
    <main>
        <section>
            <div class="content">
                <div class="title">
                    <h1>chatbot</h1>
                </div>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                    <div class="userinput">
                        <h3>question:</h3>
                        <textarea name="user" placeholder="Say hello!"></textarea>
                        <h3>answer:</h3>
                        <div class="answer">
                            <?php echo "How can I help You?"; ?>
                        </div>
                    </div>
                    <div class="subbutton">
                        <input type="submit" name="submit" value="ask chatbot">
                    </div>
                </form>
            </div>
        </section>
    </main>
</body>
</html>