<?php
session_start();
if(!isset($_SESSION['signin'])){
    header("Location: adminpage.php?error=failed");
    exit();
}

$username = $_SESSION['username'];
$password = $_SESSION['password'];

include('database.php');
include('admin.class.php');
include('getlist.class.php');
include('admin.contr.php');
include('getlist.contr.php');

$login = new LoginContr($username, $password);
$login->loginAdmin();
$list = new OptionListContr();
$_SESSION['list'] = $list->getList();

header('Location: adminpanel.php?login=success');
