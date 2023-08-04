<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Models\Category;
use App\Request;
use App\Response;
use App\Validator;
use App\View;

class CategoryController
{

    public function __construct(private Category $categoryModel, private Request $request, private Response $response)
    {
    }


    // GET /photos/{photo}/comments
    public function index(): View
    {
        $categories = $this->categoryModel->getAll();

        return View::make('admin/category/index', ['categories' => $categories]);
    }

    // GET /photos/{photo}/comments/create
    public function create(): View
    {
        return View::make('admin/category/create');
    }

    // POST /photos/{photo}/comments
    public function store()
    {
        $categoryName = $this->request->input('category_name');
        $categoryParent = (int) $this->request->input('parent_category_id');

        $data = $this->request->all();
        $rules = [
            'category_name' => 'required',
        ];

        $validator = new Validator($data, $rules);
        if ($validator->validate()) {
            if ($categoryParent === 0) $categoryParent = null;
            $categoryId = $this->categoryModel->create($categoryName, $categoryParent);
            if ($categoryId) {
                // $this->response->redirect(_WEB_ROOT . '/categories/create');
                return View::make('admin/category/create', ['messages' => 'Thêm danh mục thành công !']);
            }
        } else {
            $errors = $validator->errors();
            return View::make('admin/category/create', ['errors' =>  $errors]);
        }
    }

    // GET /comments/{comment}
    public function show($id)
    {
    }

    // GET /comments/{comment}/edit
    public function edit($id)
    {
    }

    // PUT/PATCH /comments/{comment}
    public function update()
    {
    }

    // DELETE /comments/{comment}
    public function destroy($id)
    {
    }
}
