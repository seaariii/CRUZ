<?php

namespace App\Controllers;

use App\Models\UserModel;

class Pages extends BaseController
{
    // Profile Page (/profile)
    public function profile()
    {
        $userModel = new UserModel();
        $data['user'] = $userModel->first();

        return view('profile', $data);
    }

    // About Page (/about)
    public function about()
    {
        $userModel = new UserModel();
        $data['user'] = $userModel->first();

        return view('about', $data);
    }
}