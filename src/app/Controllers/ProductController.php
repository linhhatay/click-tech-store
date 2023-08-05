<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Models\Attribute;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\ProductCategory;
use App\Models\ProductImage;
use App\Request;
use App\View;

class ProductController
{

    public function __construct(
        private Attribute $attributeModel,
        private Category $categoryModel,
        private Product $productModel,
        private ProductAttribute $productAttributesModel,
        private ProductCategory $productCategoryModel,
        private ProductImage $productImagesModel,
        private Request $request
    ) {
    }
    // GET /photos/{photo}/comments
    public function index(): View
    {
        return View::make('admin/product/index', ['products' => $this->productModel->getAll()], 'admin');
    }

    // GET /photos/{photo}/comments/create
    public function create(): View
    {
        $categories = $this->categoryModel->getAll();

        return View::make('admin/product/create', ['categories' => $categories], 'admin');
    }

    // POST /photos/{photo}/comments
    public function store()
    {
        $data = $this->request->all();
        $files = $this->request->file('images');
        $productName = $this->request->input('product_name');
        $description = $this->request->input('description');
        $price = (float) $this->request->input('price');
        $stockQuantity = (int) $this->request->input('stock_quantity');
        $attributeName = $this->request->input('attribute_name');
        $attributeValue = $this->request->input('attribute_value');
        echo '<pre>';
        var_dump($data);
        var_dump($files);
        echo '</pre>';

        $productId = $this->productModel->create($productName, $description, $price, $stockQuantity);
        $attributeId = $this->attributeModel->create($attributeName);
        $this->productAttributesModel->create($productId, $attributeId, $attributeValue);

        $targetDir = STORAGE_PATH . '/uploads/img/products/'; // Thư mục đích để lưu trữ tệp tải lên
        // Kiểm tra xem tệp đã tồn tại chưa
        foreach ($_FILES["images"]["tmp_name"] as $key => $tmp_name) {
            $fileName = $_FILES["images"]["name"][$key];
            $targetFile = $targetDir . basename($fileName); // Đường dẫn và tên tệp tải lên

            // Kiểm tra xem tệp đã tồn tại chưa
            if (file_exists($targetFile)) {
                echo "Tệp $fileName đã tồn tại.<br>";
            } else {
                // Di chuyển tệp tải lên vào thư mục đích
                if (move_uploaded_file($tmp_name, $targetFile)) {
                    $imagePath = $targetFile;
                    $this->productImagesModel->create($productId, $imagePath);
                }
            }
        }
    }

    // GET /comments/{comment}
    public function show($slug)
    {
        // $productModel = new Product();
        // $product = $productModel->get($id);

        // return View::make('admin/product/show', ['product' => $product]);
        return View::make('client/pages/show');
    }

    // GET /comments/{comment}/edit
    public function edit($id)
    {
        $productModel = new Product();
        $product = $productModel->get($id);

        return View::make('admin/product/edit', ['product' => $product], 'admin');
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
