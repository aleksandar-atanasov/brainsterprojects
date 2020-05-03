<?php
session_start();
require "dependencies/autoloader.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cardId = $_POST['cardId'];
    $_SESSION['id'] = $cardId; //ading the cardId into Sesion id so it can be passed and redirected to the correct game
    $validateEmail = new Email();
    $validateEmail->isValid($_POST['email']); //validates that the email is in valid format
    $email = new Email();
    $row = $email->checkForDuplicate('users',$_POST['email']); // checks the email if already exists in the db
    if ($row == 0) {
        $email->insertEmail($_POST['email']); //inserting the email in db after all the validation passes
        $_SESSION['email'] = $_POST['email'];
        header("Location:games.php");
        die();
    }
    $_SESSION['email'] = $_POST['email'];
    header("Location:games.php");
    die();
}
