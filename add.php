<?php
session_start();
if(!isset($_POST['add'])){
    header('Location: adminpanel.php?error');
    exit();
}

$tip = $_POST['tip'];
$answer = $_POST['answer'];

include('database.php');
include('add.class.php');
include('add.contr.php');
include('getlist.class.php');
include('getlist.contr.php');

$addOption = new AddContr($tip, $answer);
$addOption->add();
$list = new OptionListContr();
$_SESSION['list'] = $list->getList();

header("Location: adminpanel.php?add=success");