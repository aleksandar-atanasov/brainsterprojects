<?php

class Email
{
    private $email;

    public function isValid($email)
    {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location:index.php?email=invalid");
            die();
        }
        return true;
    }
}
