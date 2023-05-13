<?php
session_start();
if(!isset($_POST['signin'])){
    header("Location: adminpage.php");
    exit();
}

$login = $_SESSION['login'];
$password = $_SESSION['password'];


