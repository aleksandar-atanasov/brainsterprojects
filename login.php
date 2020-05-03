<?php
require "dependencies/autoloader.php";

$user = new UsersContr();
$row = $user->loginUser($_POST['email']);
$hashedPasssword = $row['password'];
$password = $_POST['password'];

if(password_verify($password, $hashedPasssword)){
    session_start();
    $_SESSION['first_name'] = $row['first_name'];
    $_SESSION['last_name'] = $row['last_name'];
    $_SESSION['company_name'] = $row['company_name'];
    $_SESSION['phone_number'] = $row['phone_number'];
    $_SESSION['employees_number'] = $row['employees_number'];
    $_SESSION['sector'] = $row['sector'];
    $_SESSION['email'] = $row['email'];
    header("Location:dashboard.php");
} else {
    header("Location:login-page.php?error=wrongCredentials");
}
