<?php

session_start();
if(!isset($_SESSION['submit'])){
    header("Location: index.php");
    exit();
}

$question = $_SESSION['user'];
$_SESSION['sent'] = $_SESSION['user'];

include('database.php');
include('question.class.php');
include('question.contr.php');

$ques = new QuestionContr($question);

$ques->answer();

header('Location: index.php');