<?php
namespace App\Models;

use App\Model;

class IndexModel extends Model
{
    private $table = null;

    public function __construct()
    {
        parent::__construct();
        $this->table = "";
    }

    public function get($id)
    {
        try {
            $stmt = self::$conn->prepare("SELECT * FROM $this->table WHERE id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return $stmt->fetch();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function insert($data)
    {
        try {
            $stmt = self::$conn->prepare("INSERT INTO $this->table (name, email) VALUES (:name, :email)");
            $stmt->bindParam(':name', $data->name);
            $stmt->bindParam(':email', $data->email);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function update($id, $data)
    {
        try {
            $stmt = self::$conn->prepare("UPDATE $this->table SET name = :name, email = :email WHERE id = :id");
            $stmt->bindParam(':name', $data->name);
            $stmt->bindParam(':email', $data->email);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return $stmt->fetch();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function delete($id)
    {
        try {
            $stmt = self::$conn->prepare("DELETE FROM $this->table WHERE id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return $stmt->fetch();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

}
