<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Models\Product;
use App\View;

class AdminController
{

    public function __construct()
    {
    }
    // GET /photos/{photo}/comments
    public function index(): View
    {
        return View::make('admin/layout');
    }

    // GET /photos/{photo}/comments/create
    public function create(): View
    {
        return View::make('admin/product/create');
    }

    // POST /photos/{photo}/comments
    public function store()
    {
    }

    // GET /comments/{comment}
    public function show()
    {
    }

    // GET /comments/{comment}/edit
    public function edit()
    {
    }

    // PUT/PATCH /comments/{comment}
    public function update()
    {
    }

    // DELETE /comments/{comment}
    public function destroy()
    {
    }
}
