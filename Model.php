<?php

abstract class Model
{

    protected $conn = null;

    function __construct()
    {
        $this->init();
    }

    public function init()
    {
        try {
            $db_host = 'localhost';
            $db_name = '';
            $db_user = 'root';
            $db_password = '';
            $dsn = "mysql:host=$db_host;dbname=$db_name;charset=utf8";
            $this->conn = new PDO($dsn, $db_user, $db_password);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

}
