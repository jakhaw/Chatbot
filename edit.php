<?php
session_start();
if(!isset($_POST['edit'])){
    header("Location: index.php");
    exit();
}

$tip = $_POST['edittip'];
$answer = $_POST['editanswer'];
$id = $_POST['editid'];

include('database.php');
include('edit.class.php');
include('edit.contr.php');
include('getlist.class.php');
include('getlist.contr.php');

$edit = new EditContr($tip, $answer, $id);
$edit->edit();
$list = new OptionListContr();
$_SESSION['list'] = $list->getList();

header('Location: adminpanel.php?edit=success');