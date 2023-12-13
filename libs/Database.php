<?php

class Database
{
    private $host = "localhost";
    private $db = "site";
    private $username = "root";
    private $password = "";
    public $pdo = null;
    public $stmt = null;

    public function __construct()
    {
        try {
            $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->db;charset=utf8mb4", $this->username, $this->password);
        }
        catch (PDOException $e)
        {
            die($e->getMessage());
        }
    }

    public function getRow($query, $params=null)
    {
        try {
            if(is_null($params)):
                $this->stmt = $this->pdo->query($query);
            else:
                $this->stmt = $this->pdo->prepare($query);
                $this->stmt->execute($params);
            endif;

            return $this->stmt->fetch();
        }
        catch(PDOException $e)
        {
            die($e->getMessage());
        }
    }

    public function getRows($query, $params=null)
    {
        try {
            if(is_null($params)):
                $this->stmt = $this->pdo->query($query);
            else:
                $this->stmt = $this->pdo->prepare($query);
                $this->stmt->execute($params);
            endif;

            return $this->stmt->fetchAll(PDO::FETCH_OBJ);
        }
        catch(PDOException $e)
        {
            die($e->getMessage());
        }
    }

    public function getRowCount($query, $params=null)
    {
        try {
            if(is_null($params)):
                $this->stmt = $this->pdo->query($query);
            else:
                $this->stmt = $this->pdo->prepare($query);
                $this->stmt->execute($params);
            endif;

            return $this->stmt->rowCount();
        }
        catch(PDOException $e)
        {
            die($e->getMessage());
        }
    }

    public function insert($query, $params=null)
    {
        try {
            if(is_null($params)):
                $this->stmt = $this->pdo->query($query);
            else:
                $this->stmt = $this->pdo->prepare($query);
                $this->stmt->execute($params);
            endif;

            return $this->pdo->lastInsertId();
        }
        catch(PDOException $e)
        {
            die($e->getMessage());
        }
    }

    public function __destruct()
    {
        $this->pdo = null;
    }
}