<?php

if(!isset($_SESSION['add'])){
    header('Location: adminpanel.php?error');
    exit();
}

$tip = $_SESSION['tip'];
$answer = $_SESSION['answer'];

