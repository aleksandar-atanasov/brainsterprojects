<?php

class Email extends Query
{
    private $email;


     public function insertEmail($email)
    {
        return $this->insert($email);
    }

    public function checkForDuplicate(string $table , $email)
    {
        return $this->getEmail($table ,$email);
    }

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
