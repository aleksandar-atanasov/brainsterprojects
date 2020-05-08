<?php
function validatePassword($password){

    if (strlen($password) < 6 || !preg_match("/[a-z]+/", $password)
        || !preg_match("/[A-Z]+/", $password)
        || !preg_match("/[0-9]+/", $password)
        || !preg_match("/[!@#\$%\^&\*]+/", $password)) {

            header("Location:register-page.php?error=invalidPassword");
            die();
    }
    return true;
}
function printError()
{
    if (isset($_GET['error'])) {
        $errorMessages = [
            'invalidemail' => "Веќе постои регистрација со тој емаил!",
            'invalidPassword' => "Лозинката треба да содржи најмалку 6 карактери, голема буква, мала буква, број и специјален знак!",
            'wrongCredentials' => "Внесовте погрешни информации",
            'required' => "Логирајте се за да продолжите понатаму!",
            'loggedIn' => "Веќе сте најавени, одјавете се за да продолжите понатаму..",
            'registered' => "Одјавете се за да можете повторно да се регистрирате!"
        ];
        if (isset($errorMessages[$_GET['error']])) {
            echo "<p class='bg-danger text-danger'><i class='fas fa-exclamation-triangle'></i> " . $errorMessages[$_GET['error']] . "</p>";
        }

    }
}
function printSuccess()
{
    if (isset($_GET['success'])) {
        $successMessages = [
            'registered' => "Успешно се регистриравте!",
        ];

        if (isset($successMessages[$_GET['success']])) {
            echo "<p class='bg-success text-success'><i class='fas fa-check-circle'></i> " . $successMessages[$_GET['success']] . "</p>";
        }
    }
}
