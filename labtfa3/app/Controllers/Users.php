<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $data['users'] = $this->userModel->findAll();
        return view('users/index', $data);
    }

    public function new()
    {
        helper(['form']);
        return view('users/new');
    }

    public function create()
    {
        $rules = [
            'username'  => [
                'label' => 'Username',
                'rules' => 'required|min_length[3]|is_unique[users.username]'
            ],
            'full_name' => [
                'label' => 'Full Name',
                'rules' => 'required|min_length[3]'
            ]
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->userModel->save([
            'username'  => $this->request->getPost('username'),
            'full_name' => $this->request->getPost('full_name'),
        ]);

        return redirect()->to('/users')->with('success', 'User created successfully!');
    }

    public function edit($id = null)
    {
        helper(['form']);
        $user = $this->userModel->find($id);

        if (! $user) {
            return redirect()->to('/users')->with('error', 'User not found.');
        }

        $data['user'] = $user;
        return view('users/edit', $data);
    }

    public function update($id = null)
    {
        $rules = [
            'username'  => 'required|min_length[3]',
            'full_name' => 'required|min_length[3]',
            'avatar'    => 'is_image[avatar]|max_size[avatar,2048]|ext_in[avatar,png,jpg,jpeg]',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'username'  => $this->request->getPost('username'),
            'full_name' => $this->request->getPost('full_name'),
        ];

        $file = $this->request->getFile('avatar');

        if ($file && $file->isValid() && ! $file->hasMoved()) {
            // Generate a random name to prevent file collisions
            $newName = $file->getRandomName();

            // Move file to public/uploads/ directory
            $file->move(ROOTPATH . 'public/uploads', $newName);

            // Crop/resize image using CodeIgniter Image Service
            \Config\Services::image()
                ->withFile(ROOTPATH . 'public/uploads/' . $newName)
                ->fit(150, 150, 'center')
                ->save(ROOTPATH . 'public/uploads/' . $newName);

            $data['avatar'] = $newName;
        }

        $this->userModel->update($id, $data);

        return redirect()->to('/users')->with('success', 'User profile updated successfully!');
    }
}
