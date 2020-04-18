<?php

class UsersContr extends Query
{
    public function insertEmail($email)
    {
        return $this->insert($email);
    }

    public function checkForDuplicate($email)
    {
        return $this->getEmail($email);
    }

}
