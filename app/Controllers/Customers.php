<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $customers = [
            [
                'full_name' => 'Ariana Santos',
                'email' => 'ariana.santos@example.com',
                'phone' => '+63 917 111 2233',
            ],
            [
                'full_name' => 'Miguel Reyes',
                'email' => 'miguel.reyes@example.com',
                'phone' => '+63 918 222 3344',
            ],
            [
                'full_name' => 'Sofia Lim',
                'email' => 'sofia.lim@example.com',
                'phone' => '+63 919 333 4455',
            ],
            [
                'full_name' => 'Daniel Cruz',
                'email' => 'daniel.cruz@example.com',
                'phone' => '+63 920 444 5566',
            ],
            [
                'full_name' => 'Liza Mendoza',
                'email' => 'liza.mendoza@example.com',
                'phone' => '+63 921 555 6677',
            ],
        ];

        return view('customers/index', ['customers' => $customers]);
    }
}
