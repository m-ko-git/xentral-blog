<?php


namespace Blog\Model;


class Database
{
    private $host="";
    private $user="";
    private $db="";
    private $pass="";
    private $conn;

    public function __construct()
    {
        $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->db,$this->user,$this->pass);
    }

}