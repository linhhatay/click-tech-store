<?php

declare(strict_types=1);

namespace App\Models;

use App\Model;

class ProductAttribute extends Model
{
    public function get($id)
    {
    }

    public function getAll()
    {
    }

    public function create(int $productId, int $attributeId, string $attributeValue): int
    {
        $stmt = $this->query("INSERT INTO product_attributes(product_id, attribute_id, attribute_value) VALUES(?, ?, ?)", [$productId, $attributeId, $attributeValue]);
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
