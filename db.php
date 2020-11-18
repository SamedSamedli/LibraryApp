<?php

class Db
{
    private static $instance = null;
    private $connection;

    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $name = 'library';

    private function __construct()
    {
        $this->connection = new PDO("mysql:host={$this->host};dbname={$this->name};charset=utf8" , $this->user,$this->pass);
    }

    public static function getInstance()
    {
        if(!self::$instance)
        {
            self::$instance = new Db();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->connection;
    }
}

?>