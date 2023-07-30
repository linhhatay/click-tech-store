<?php

declare(strict_types=1);

namespace App\Models;

use App\Model;

class Product extends Model
{
    public function get($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM products WHERE id = ?");
        $stmt->execute([$id]);

        return $stmt->fetch();
    }

    public function getAll()
    {
        $stmt = $this->db->prepare("SELECT * FROM products");

        $stmt->execute();

        return  $stmt->fetchAll();
    }

    public function create(string $name, float $price, string $files, string $description): int
    {
        $stmt = $this->db->prepare("INSERT INTO products(name, price, image, description) VALUES(?, ?, ?, ?)");

        $stmt->execute([$name, $price, $files, $description]);

        return (int) $this->db->lastInsertId();
    }

    public function update(int $id, string $name, float $price, string $image, string $description): bool
    {
        $stmt = $this->db->prepare("UPDATE products SET name = ?, price = ?, image = ?, description = ? WHERE id = ?");
        $stmt->execute([$name, $price, $image, $description, $id]);

        return $stmt->rowCount() > 0;
    }

    public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM products WHERE id = ?");
        $stmt->execute([$id]);

        return $stmt->rowCount() > 0;
    }
}
