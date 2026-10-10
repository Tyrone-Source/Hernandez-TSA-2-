<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    public function login()
    {
        return view('login');
    }

    public function authenticate()
    {
        $session = session();
        $model = new UserModel();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $user = $model->where('email', $email)->first();

        if ($user) {
            // Temporary check: accepts hashed password OR direct plain password 'password123'
            if (password_verify($password, $user['password']) || $password === 'password123') {
                $ses_data = [
                    'id'       => $user['id'],
                    'name'     => isset($user['username']) ? $user['username'] : $user['full_name'],
                    'email'    => $user['email'],
                    'logged_in'=> TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/tasks');
            } else {
                $session->setFlashdata('msg', 'Incorrect password.');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'Email not found.');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}