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
            <article class="page-content">
                <div class="header">
                    <nav class="header-nav">
                        <div class="headline"><h1>Admin panel</h1></div>
                        <div class="logout">
                            <a href="logout.php"><h1>Sign Out</h1></a>
                        </div>
                    </nav>
                    <div class="btn-container">
                        <button class="tab-btn active" data-id="edit">Edit</button>
                        <button class="tab-btn" data-id="add">Add</button>
                    </div>
                </div>
                <div class="adminpanel-content" id="add">
                    <div class="title">
                        <h1>Add</h1>
                    </div>
                    <form action="add.php" method="POST">
                        <div class="add-admininput adminpanel">
                            <textarea name="tip" placeholder="Tip" required></textarea>
                            <textarea name="answer" placeholder="Answer" required></textarea>
                        </div>
                        <div class="subbutton">
                            <input type="submit" name="add" value="Add Option">
                        </div>
                    </form>
                </div>
                <div class="adminpanel-content active" id="edit">
                    <div class="title">
                        <h1>Edit</h1>
                    </div>
                    <ol>
                    <?php
                    foreach($_SESSION['list'] as $option){
                        echo<<<END
                        <div class="edit-content">
                            <form action="edit.php" method="POST">
                                <div class="edit-admininput adminpanel">
                                    <h3>id:</h3>
                                    <textarea name="editid" readonly>{$option['id']}</textarea>
                                    <h3>Tip:</h3>
                                    <textarea name="edittip">{$option['tips']}</textarea>
                                    <h3>answer:</h3>
                                    <textarea name="editanswer">{$option['answer']}</textarea>
                                </div>
                                <div class="edit-subbutton">
                                    <input type="submit" name="edit" value="Edit Option">
                                </div>
                            </form>
                        </div>
                        END;
                    }
                    ?>
                    </ol>
                </div>
            </article>
        </section>
    </main>
    <script src="app.js"></script>
</body>
</html>