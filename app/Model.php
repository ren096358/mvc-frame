<?php
namespace App;

require_once "./config.php";

class Model
{

    protected static $conn = null;

    public function __construct()
    {
        if (empty(self::$conn)) {
            $this->init();
        }
    }

    public function __destruct()
    {
        self::$conn = null;
    }

    public function init()
    {
        try {
            $db_host = DB_HOST;
            $db_name = DB_NAME;
            $db_user = DB_USER;
            $db_password = DB_PASSWD;
            $dsn = "mysql:host=$db_host;dbname=$db_name;charset=utf8";
            self::$conn = new PDO($dsn, $db_user, $db_password);
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function beginTransaction()
    {
        return self::$conn->beginTransaction();
    }

    public function commit()
    {
        return self::$conn->commit();
    }

    public function rollback()
    {
        return self::$conn->rollback();
    }

}
