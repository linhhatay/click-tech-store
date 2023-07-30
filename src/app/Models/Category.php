<?php

declare(strict_types=1);

namespace App\Models;

use App\Model;

class Category extends Model
{
    public function get($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM categories WHERE id = ?");
        $stmt->execute([$id]);

        return $stmt->fetch();
    }

    public function getAll()
    {
        $stmt = $this->db->prepare("SELECT * FROM categories");

        $stmt->execute();

        return  $stmt->fetchAll();
    }

    public function create(string $name, int $parent = null): int
    {
        $stmt = $this->db->prepare("INSERT INTO categories(category_name, parent_category_id) VALUES(?, ?)");

        $stmt->execute([$name, $parent]);

        return (int) $this->db->lastInsertId();
    }

    public function update(int $id, string $name, int $parent = null): bool
    {
        $stmt = $this->db->prepare("UPDATE categories SET category_name = ?, parent_category_id = ? WHERE id = ?");
        $stmt->execute([$name, $parent, $id]);

        return $stmt->rowCount() > 0;
    }

    public function delete($id)
    {
        // $stmt = $this->db->prepare("DELETE FROM products WHERE id = ?");
        // $stmt->execute([$id]);

        // return $stmt->rowCount() > 0;
    }
}
