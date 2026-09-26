<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $users = [
            [
                'username' => 'admin01',
                'full_name' => 'Renee Bautista',
                'role' => 'Administrator',
            ],
            [
                'username' => 'mgr_santos',
                'full_name' => 'Ethan Santos',
                'role' => 'Manager',
            ],
            [
                'username' => 'cashier_lee',
                'full_name' => 'Mia Lee',
                'role' => 'Cashier',
            ],
            [
                'username' => 'mgr_fernandez',
                'full_name' => 'Julian Fernandez',
                'role' => 'Manager',
            ],
            [
                'username' => 'cashier_vega',
                'full_name' => 'Kyla Vega',
                'role' => 'Cashier',
            ],
        ];

        return view('users/index', ['users' => $users]);
    }
}
