<?php
session_start();
if(!isset($_SESSION['login'])){
    header("Location: adminpage.php?error=loginfalse");
    exit();
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
                    <h1>Add</h1>
                </div>
                <form action="add.php" method="POST">
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
                <div class="title">
                    <h1>Edit</h1>
                </div>
                <ol>
                <?php
                foreach($_SESSION['list'] as $option){
                    echo<<<END
                    <div class="content">
                        <form action="edit.php" method="POST">
                            <div class="userinput">
                                <h3>id:<h3>
                                <textarea name="editid" readonly>{$option['id']}</textarea>
                                <h3>Tip:</h3>
                                <textarea name="edittip">{$option['tips']}</textarea>
                                <h3>answer:</h3>
                                <textarea name="editanswer">{$option['answer']}</textarea>
                            </div>
                            <div class="subbutton">
                                <input type="submit" name="edit" value="Edit Option">
                            </div>
                        </form>
                    </div>
                    END;
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