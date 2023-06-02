<?php
session_start();
if(isset($_SESSION['login'])){
    header("Location: adminpanel.php");
    exit();
}
if($_SERVER['REQUEST_METHOD'] === "POST"){
    $_SESSION['user'] = $_POST['user'];
    $_SESSION['submit'] = $_POST['submit'];
    header('Location: question.php');
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime&family=Oswald&display=swap" rel="stylesheet">
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
                        <div class="text-content">
                            <div class="question">
                                <?php 
                                    if(isset($_SESSION['sent'])){
                                        echo $_SESSION['sent'];
                                        unset($_SESSION['sent']);
                                    }else{
                                        echo "Example question";
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="text-content">
                            <div class="answer">
                                <?php 
                                    if(isset($_SESSION['answer'])){
                                        echo $_SESSION['answer'];
                                        unset($_SESSION['answer']);
                                    }else{
                                        echo "Example answer";
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="main-subbutton">
                        <textarea name="user" placeholder="Aa" autofocus required></textarea>
                        <div class="send-btn">
                            <input type="submit" name="submit" value="Send">
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>
</body>
</html>