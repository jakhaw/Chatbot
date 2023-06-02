<?php
session_start();
if(isset($_SESSION['login'])){
    header("Location: adminpanel.php");
    exit();
}
if($_SERVER['REQUEST_METHOD'] === "POST"){
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['signin'] = $_POST['signin'];
    header('Location: admin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Admin Login</title>
</head>
<body>
    <main>
        <section>
            <div class="content">
                <div class="title">
                    <h1>Admin Panel Login</h1>
                </div>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                    <div class="add-admininput">
                        <input type="text" name="username" placeholder="Username:">
                        <input type="password" name="password" placeholder="Password:">
                    </div>
                    <p>
                    <?php
                        if(isset($_SESSION['error'])){
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                        }
                    ?>
                    </p>
                    <div class="subbutton">
                        <input type="submit" name="signin" value="Sign In">
                    </div>
                </form>
            </div>
        </section>
    </main>
</body>
</html>