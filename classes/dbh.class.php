<?php

abstract class Dbh
{
    private $servername;
    private $username;
    private $password;
    private $dbName;
    private $charset;

    public function connect()
    {
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "root";
        $this->dbName = "Toolbox";
        $this->charset = "utf8";

        try {
            $dsn = "mysql:host=" . $this->servername . ";dbname=" . $this->dbName . ";charset=" . $this->charset;
            $pdo = new PDO($dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        } catch (PDOException $e) {
            die($e->getMessage());
        }

    }

}
