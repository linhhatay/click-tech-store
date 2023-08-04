<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Models\Admin;
use App\Request;
use App\Response;
use App\Session;
use App\Validator;
use App\View;

class AuthController
{

    public function __construct(private Admin $adminModel, private Request $request, private Response $response)
    {
    }
    // GET /photos/{photo}/comments
    public function index(): View
    {
        return View::make('client/pages/login');
    }

    public function login()
    {
        $data = $this->request->all();
        $username = $this->request->input('username');
        $password = $this->request->input('password');

        $rules = [
            'username' => 'required',
            'password' => 'required|min:6',
        ];

        $validator = new Validator($data, $rules);
        $session = Session::getInstance();
        $session->flashInput($data);

        if ($validator->validate()) {
            try {
                $admin =  $this->adminModel->login($username, $password);
                $admin && $this->response->redirect(_WEB_ROOT);
            } catch (\Exception $e) {
                $errors = ['login' => [$e->getMessage()]];
                return View::make('client/pages/login', ['errors' => $errors]);
            }
        } else {
            $errors = $validator->errors();
            return View::make('client/pages/login', ['errors' =>  $errors]);
        }
    }
}
