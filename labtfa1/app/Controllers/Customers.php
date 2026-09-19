<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        // Static PHP array with your name + 6 Modern Family characters
        $customers = [
            [
                'full_name' => 'Cruz, Aryanne Chelsea', 
                'email'     => 'cruz.aryannechelsea@example.com',
                'phone'     => '+63 917 000 0000'
            ],
            [
                'full_name' => 'Jay Pritchett',
                'email'     => 'jay.pritchett@closetsclosets.com',
                'phone'     => '+1 310 555 0101'
            ],
            [
                'full_name' => 'Gloria Delgado-Pritchett',
                'email'     => 'gloria.pritchett@example.com',
                'phone'     => '+1 310 555 0102'
            ],
            [
                'full_name' => 'Phil Dunphy',
                'email'     => 'phil.dunphy@realty.com',
                'phone'     => '+1 310 555 0103'
            ],
            [
                'full_name' => 'Claire Dunphy',
                'email'     => 'claire.dunphy@pritchclosets.com',
                'phone'     => '+1 310 555 0104'
            ],
            [
                'full_name' => 'Luke Dunphy',
                'email'     => 'luke.dunphy@example.com',
                'phone'     => '+1 310 555 0105'
            ],
            [
                'full_name' => 'Haley Dunphy',
                'email'     => 'haley.dunphy@nerp.com',
                'phone'     => '+1 310 555 0106'
            ],
        ];

        $data = [
            'title'     => 'Customer Accounts',
            'customers' => $customers
        ];

        return view('customers/index', $data);
    }
}