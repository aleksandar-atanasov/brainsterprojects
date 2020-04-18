<?php

class Query extends Dbh
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

    protected function getEmail($email)
    {
        $sql = "SELECT * FROM users WHERE email= :email";
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
}
