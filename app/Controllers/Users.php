<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
    
        $users = [
            [
                'username'  => 'cruz_admin',
                'full_name' => 'Aryanne Chelsea Cruz',
                'role'      => 'System Administrator'
            ],
            [
                'username'  => 'mitchell_law',
                'full_name' => 'Mitchell Pritchett',
                'role'      => 'Legal Compliance Officer'
            ],
            [
                'username'  => 'cam_fizzbo',
                'full_name' => 'Cameron Tucker',
                'role'      => 'Store Manager'
            ],
            [
                'username'  => 'alex_genius',
                'full_name' => 'Alex Dunphy',
                'role'      => 'IT Systems Lead'
            ],
            [
                'username'  => 'manny_poet',
                'full_name' => 'Manny Delgado',
                'role'      => 'Customer Relations Specialist'
            ],
            [
                'username'  => 'stella_mascot',
                'full_name' => 'Stella Pritchett',
                'role'      => 'Inventory Assistant'
            ],
        ];

        $data = [
            'title' => 'User Accounts',
            'users' => $users
        ];

        return view('users/index', $data);
    }
}