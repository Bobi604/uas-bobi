<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];
        return view('home_page', $data);
    }

    static function about()
    {
        $data = [
            'title' => 'About'
        ];
        return view('about_page', $data);
    }

    public function gallery()
    {
        $data = [
            'title' => 'Gallery'
        ];
        return view('gallery_page', $data);
    }

    public function profil()
    {
        $data = [
            'title' => 'Profil'
        ];
        return view('profil_page',  $data);
        $data['users'] = $userModel->findAll();
    }
}