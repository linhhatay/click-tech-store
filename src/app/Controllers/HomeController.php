<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Models\Product;
use App\Services\InvoiceService;
use App\View;

class HomeController
{

    public function __construct(private InvoiceService $invoiceService)
    {
    }
    // GET /photos/{photo}/comments
    public function index(): View
    {
        // $this->invoiceService->process([], 25);
        return View::make('index');
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
