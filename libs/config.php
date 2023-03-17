<?php

class DatabaseConnection
{
    public ?\PDO $database = null;

    public function getConnection(): \PDO
    {
        if ($this->database === null) {
            $this->database = new \PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', 'jo161086');
        }

        return $this->database;
    }
}