<?php

session_start();
if(!isset($_SESSION['login'])){
    header('Location: adminpage.php');
    exit();
}
session_unset();
session_destroy();

header('Location: adminpage.php?logout=success');