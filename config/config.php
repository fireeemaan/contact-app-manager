<?php

class DbConfig
{
    private $host = 'localhost';
    private $username = 'root';
    private $password = 'tahutahu1';
    private $database = 'contact-app-manager';
    private $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }

    }

    public function getConnection()
    {
        return $this->conn;
    }
}

