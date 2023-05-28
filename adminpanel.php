<?php
session_start();
if(!isset($_SESSION['login'])){
    header("Location: adminpage.php?error=loginfalse");
    exit();
}
if($_SERVER['REQUEST_METHOD'] === "POST"){
    $_SESSION['tip'] = $_POST['tip'];
    $_SESSION['answer'] = $_POST['answer'];
    $_SESSION['add'] = $_POST['add'];
    header('Location: add.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Admin Panel</title>
</head>
<body>
    <main>
        <section>
            <div class="content">
                <div class="title">
                    <h1>Admin Panel</h1>
                </div>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                    <div class="userinput">
                        <h3>Tip:</h3>
                        <textarea name="tip" placeholder="Type tip for bot"></textarea>
                        <h3>answer:</h3>
                        <textarea name="answer" placeholder="type answer for bot"></textarea>
                    </div>
                    <div class="subbutton">
                        <input type="submit" name="add" value="Add Option">
                    </div>
                </form>
            </div>
            <div class="list">
                <h3>tips and answers</h3>
                <ol>
                <?php
                foreach($_SESSION['list'] as $option){
                    echo "<li>{$option['tips']} | {$option['answer']} > <a href='edit.php'>Edit</a> <</li>";
                }
                ?>
                </ol>
            </div>
            <div class="logout">
                <a href="logout.php">Sing Out</a>
            </div>
        </section>
    </main>
</body>
</html>