<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class Customers extends BaseController
{
    protected $customerModel;

    public function __construct()
    {
        $this->customerModel = new CustomerModel();
    }

    public function index()
    {
        $data['customers'] = $this->customerModel->findAll();
        return view('customers/index', $data);
    }

    // Display form for new customer
    public function new()
    {
        helper(['form']);
        return view('customers/new');
    }

    // Save new customer with validation
    public function create()
    {
        $rules = [
            'full_name' => [
                'label' => 'Full Name',
                'rules' => 'required|min_length[3]'
            ],
            'email' => [
                'label' => 'Email Address',
                'rules' => 'required|valid_email'
            ]
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->customerModel->save([
            'full_name' => $this->request->getPost('full_name'),
            'email'     => $this->request->getPost('email'),
        ]);

        return redirect()->to('/customers')->with('success', 'Customer created successfully!');
    }

    // Display edit form pre-filled with data
    public function edit($id = null)
    {
        helper(['form']);
        $customer = $this->customerModel->find($id);

        if (!$customer) {
            return redirect()->to('/customers')->with('error', 'Customer not found.');
        }

        $data['customer'] = $customer;
        return view('customers/edit', $data);
    }

   // Update customer record
public function update($id = null)
{
    $rules = [
        'full_name' => 'required|min_length[3]',
        'email'     => 'required|valid_email'
    ];

    if (! $this->validate($rules)) {
        return redirect()->back()->withInput()->with('validation', $this->validator);
    }

    $this->customerModel->update($id, [
        'full_name' => $this->request->getPost('full_name'),
        'email'     => $this->request->getPost('email'),
    ]);

    return redirect()->to('/customers')->with('success', 'Customer updated successfully!');
}
}
