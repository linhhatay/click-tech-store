<?php

declare(strict_types=1);

namespace App\Models;

use App\Model;

class Attribute extends Model
{
    public function get($id)
    {
    }

    public function getAll()
    {
    }

    public function create(string $attributeName): int
    {
        $stmt = $this->query("INSERT INTO attributes(attribute_name) VALUES(?)", [$attributeName]);
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
