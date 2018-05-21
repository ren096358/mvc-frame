<?php

require_once 'Model.php';

class IndexModel extends Model
{
    private $table = null;

    function __construct()
    {
        parent::__construct();
        $this->table = "";
    }

    public function get()
    {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM $this->table WHERE id = :id");

            $stmt->execute();
            return $stmt->fetch();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function insert($data)
    {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM $this->table WHERE used = 0 ORDER BY RAND() LIMIT 1");
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function update($id, $data)
    {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM $this->table WHERE used = 0 ORDER BY RAND() LIMIT 1");
            $stmt->execute();
            return $stmt->fetch();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function delete($id)
    {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM $this->table WHERE used = 0 ORDER BY RAND() LIMIT 1");
            $stmt->execute();
            return $stmt->fetch();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }


}
