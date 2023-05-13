<?php
session_start();

if($_SERVER['REQUEST_METHOD'] === "POST"){
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['password'] = $_POST['password'];
    header('Location: admin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
                    <div class="admininput">
                        <h3>Username:</h3>
                        <input type="text" name="login">
                        <h3>Password:</h3>
                        <input type="password" name="password">
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
                        <input type="submit" name="signin" value="Sign in">
                    </div>
                </form>
            </div>
        </section>
    </main>
</body>
</html>