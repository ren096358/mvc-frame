<?php
namespace App;

require_once "./config.php";

abstract class Model
{

    protected $conn = null;

    public function __construct()
    {
        $this->init();
    }

    public function init()
    {
        try {
            $db_host = DB_HOST;
            $db_name = DB_NAME;
            $db_user = DB_USER;
            $db_password = DB_PASSWD;
            $dsn = "mysql:host=$db_host;dbname=$db_name;charset=utf8";
            $this->conn = new \PDO($dsn, $db_user, $db_password, []);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

}
