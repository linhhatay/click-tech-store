<?php

declare(strict_types=1);

namespace App\Models;

use App\Model;

class ProductImage extends Model
{
    public function get($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM product_images WHERE id = ?");
        $stmt->execute([$id]);

        return $stmt->fetch();
    }

    public function getAll()
    {
        $stmt = $this->db->prepare("SELECT * FROM product_images");

        $stmt->execute();

        return  $stmt->fetchAll();
    }

    public function create(int $productId, string $imageUrl): int
    {
        $stmt = $this->query("INSERT INTO product_images(product_id, image_url) VALUES(?, ?)", [$productId, $imageUrl]);

        return (int) $this->db->lastInsertId();
    }

    public function update(int $id, string $name, int $parent = null): bool
    {
        $stmt = $this->db->prepare("UPDATE product_images SET category_name = ?, parent_category_id = ? WHERE id = ?");
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
