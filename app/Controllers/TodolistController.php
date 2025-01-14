<?php

namespace App\Controllers;

use App\Models\TodolistModel;

class TodolistController extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new TodolistModel(); // Menggunakan model yang sudah diinisialisasi
    }

    public function index()
    {
        // Ambil semua data todo dari database
        $data['title'] = 'Todolist';
        $data['todos'] = $this->model->findAll();  // Menampilkan semua todo
        
        return view('todolist/index', $data);  // Mengirim data ke view
    }

    public function create()
    {
        $data['title'] = 'Create Todo';
        return view('todolist/create', $data);  // Menampilkan form create
    }

    public function store()
    {
        // Ambil data dari form input
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'status' => $this->request->getPost('status'),
            'start_time' => $this->request->getPost('start_time') ?: null, // Menangani start_time jika kosong
            'duration' => $this->request->getPost('duration') ?: 0, // Defaultkan 0 jika kosong
        ];

        // Validasi inputan menggunakan aturan yang ada di model
        if ($this->validate($this->model->validationRules)) {
            // Insert data ke database
            if ($this->model->insert($data)) {
                // Redirect setelah data berhasil ditambahkan
                return redirect()->to('/todolist/index')->with('success', 'Todo Berhasil Ditambahkan');
            } else {
                // Menangani jika insert gagal
                return redirect()->back()->with('error', 'Gagal menyimpan data. Silakan coba lagi.')->withInput();
            }
        } else {
            // Jika validasi gagal, kembali ke form create dengan pesan error
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
    }
}