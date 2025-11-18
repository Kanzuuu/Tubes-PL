<?php

class Database
{
    protected $conn;
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'event&konser';

    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
        
        if ($this->conn->connect_error) {
            die("Koneksi gagal: " . $this->conn->connect_error);
        }
    }

    // Mengembalikan objek koneksi mysqli untuk digunakan pada model
    public function getConnection()
    {
        return $this->conn;
    }
}