<?php

declare(strict_types=1);

namespace App\Models;

use App\Model;
use App\Session;
use Exception;


class Admin extends Model
{
    public function login(string $username, string $password)
    {
        $stmt = $this->db->prepare("SELECT * FROM admins WHERE username = :username");
        $stmt = $this->query("SELECT * FROM admins WHERE username = :username", [':username' => $username]);
        $admin = $stmt->fetch();

        if (!$admin || !password_verify($password, $admin['password'])) {
            throw new Exception('Địa chỉ email không xác định. Kiểm tra lại hoặc thử tên người dùng của bạn.');
        }

        $session = Session::getInstance();
        $session->set('admin_id', $admin['admin_id']);
        $session->set('username', $admin['username']);
        return true;
    }
}
