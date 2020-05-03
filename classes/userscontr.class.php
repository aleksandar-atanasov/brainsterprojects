<?php

class UsersContr extends Query
{
  
    public function registerUser(string $table, array $parameters){
        
       return $this->insertUsers($table, $parameters);
    }
    public function loginUser($email){
        return $this->getUser($email);
    }
}
