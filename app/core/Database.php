<?php

class Database
{
    private $hostName = DB_HOST;
    private $dbName = DB_NAME;
    private $password = DB_PASSWORD;
    private $username = DB_USER;

    private $dbh;
    private $stmt;

    //db constructor
    public function __construct()
    {
        $dsn = 'mysql:host=' . $this->hostName . ';dbname=' . $this->dbName;
        $options = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        try {
            $this->dbh = new PDO($dsn, $this->username, $this->password, $options);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function query($query): void
    {
        $this->stmt = $this->dbh->prepare($query);
    }

    public function bind($param, $value, $type = null)
    {
        if (isnull($type)) {
            $type = match (true) {
                is_int($value) => PDO::PARAM_INT,
                is_bool($value) => PDO::PARAM_BOOL,
                is_null($value) => PDO::PARAM_NULL,
                default => PDO::PARAM_STR,
            };
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    public function execute(): void
    {
        $this->stmt->execute();
    }

    //get array result
    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //get single result
    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }
}
