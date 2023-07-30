<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Request;
use App\View;

class ProductController
{

    public function __construct(private Product $productModel, private Category $categoryModel, private ProductCategory $productCategoryModel, private Request $request)
    {
    }
    // GET /photos/{photo}/comments
    public function index(): View
    {
        return View::make('admin/product/index', ['products' => $this->productModel->getAll()]);
    }

    // GET /photos/{photo}/comments/create
    public function create(): View
    {
        $categories = $this->categoryModel->getAll();

        return View::make('admin/product/create', ['categories' => $categories]);
    }

    // POST /photos/{photo}/comments
    public function store()
    {
        $name = $_POST['name'];
        $price = (float) $_POST['price'];
        $description = $_POST['description'];

        $newFileName = null;
        if ($_FILES) {
            $uploadDir = STORAGE_PATH . '/uploads/img/products/';

            // Lấy thông tin về file đã upload
            $uploadedFile = $_FILES['image'];
            $fileName = $uploadedFile['name'];
            $tempFile = $uploadedFile['tmp_name'];

            // Tạo tên mới cho file
            $newFileName = uniqid() . '_' . $fileName; // Thêm một số duy nhất vào tên file

            // Di chuyển file đã upload vào thư mục đích với tên mới
            $destination = $uploadDir . $newFileName;
            move_uploaded_file($tempFile, $destination);
        }

        $productId = $this->productModel->create($name, $price,  $newFileName, $description);

        if ($productId) {
            header("Location: http://localhost/PHP/src/public/product");
            exit();
        }
    }

    // GET /comments/{comment}
    public function show($id)
    {
        $productModel = new Product();
        $product = $productModel->get($id);

        return View::make('admin/product/show', ['product' => $product]);
    }

    // GET /comments/{comment}/edit
    public function edit($id)
    {
        $productModel = new Product();
        $product = $productModel->get($id);

        return View::make('admin/product/edit', ['product' => $product]);
    }

    // PUT/PATCH /comments/{comment}
    public function update()
    {
    }

    // DELETE /comments/{comment}
    public function destroy($id)
    {
        echo $id;

        // $productModel = new Product();
        // $success = $productModel->delete($id);

        // if ($success) {
        //     header("Location: http://localhost/PHP/src/public/product");
        //     exit();
        // }
    }
}
