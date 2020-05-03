<?php

abstract class Query extends Dbh
{

    protected function getAll()
    {
        $sql = "SELECT * FROM cards INNER JOIN games ON cards.id = games.card_id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    protected function insert($email)
    {
        $sql = "INSERT INTO users(email) VALUES (:email)";
        $stmt = $this->connect()->prepare($sql);
        return $stmt->execute(['email' => $email]);
    }

    protected function getEmail(string $table, $email)
    {
        $sql = "SELECT * FROM $table WHERE email= :email";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(['email' => $email]);
        return $stmt->rowCount();
    }
    protected function getGame($id)
    {
        $sql = "SELECT * FROM cards INNER JOIN games ON cards.id = games.card_id
       JOIN steps ON games.id = steps.game_id WHERE games.id = :id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }
    protected function getCategory(string $category)
    {
        $sql = "SELECT * FROM cards WHERE category = :category";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(['category' => $category]);
        return $stmt->rowCount();
    }

    protected function insertUsers(string $table, array $parameters){
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );
        $stmt = $this->connect()->prepare($sql);
        return $stmt->execute($parameters);
    }
    protected function getUser($email){

        $sql = "SELECT * FROM registered_users WHERE email = :email LIMIT 1";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(['email'=> $email]);
        $userCount = $stmt->rowCount();
        if($userCount == 1){
            return $stmt->fetch();
        }
        
    }
}
