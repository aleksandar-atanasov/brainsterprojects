<?php
require "dependencies/autoloader.php";
require "dependencies/functions.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $_POST = [
    'first_name' => $_POST['first_name'],
    'last_name' => $_POST['last_name'], 
    'company_name' => $_POST['company_name'],
    'phone_number' => $_POST['phone_number'],
    'employees_number' => $_POST['employees_number'],
    'sector' => $_POST['sector'],
    'email' => $_POST['email'],
    'password' => password_hash($_POST['password'],PASSWORD_BCRYPT),
    'message' => $_POST['message']];
    $email = new Email();
    $row = $email->checkForDuplicate('registered_users',$_POST['email']); // checks the email if already exists in the db
    validatePassword($_POST['password']);
    if ($row == 0) {
        $user = new UsersContr();
        $user->registerUser('registered_users',$_POST);//register the user in the registered_users table in db
        header("Location:login-page.php?success=registered");
        die();
    }else{
        header("Location:register-page.php?error=invalidemail");
        die();
    }
}


