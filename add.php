<?php
session_start();
if(!isset($_SESSION['add'])){
    header('Location: adminpanel.php?error');
    exit();
}

$tip = $_SESSION['tip'];
$answer = $_SESSION['answer'];

include('database.php');
include('add.class.php');
include('add.contr.php');

$addOption = new AddContr($tip, $answer);
$addOption->add();

header("Location: adminpanel.php");