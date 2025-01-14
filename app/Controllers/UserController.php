<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;
use Dompdf\Dompdf;
use Dompdf\Options;

class UserController extends BaseController
{
    static function create()
    {
        $data = [
            'title' => 'Create'
        ];
        return view('/users/create_page', $data);
    }

    public function store()
    {
        $userModel = new UserModel();

        if ($this->validate([
            'username' => 'required|min_length[3]|max_length[5]',
            'email' => 'required|valid_email',
            'password' => 'required|min_length[6]',
            'foto' => 'uploaded[foto]|max_size[foto, 1024]|is_image[foto]'
        ])) {

            $image = $this->request->getFile('foto');
            $imagename = $image->getRandomName();
            $image->move('images', $imagename);

            $hashedPassword = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);

            $userModel->insert([
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'password' => $hashedPassword,
                'foto' => $imagename,
            ]);

            return redirect()->to('/login')->with('success', 'User Berhasil Ditambahkan');
        } else {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
    }

    public function edit($id)
    {
        $userModel = new UserModel();
        $data = [
            'title' => 'Edit User'
        ];
        $data['user'] = $userModel->find($id);

        return view('users/edit_page', $data);
    }

    public function update($id)
    {
        $userModel = new UserModel();

        if ($this->validate([
            'username' => 'required|min_length[3]|max_length[50]',
            'email' => 'required|valid_email',
            'foto' => 'if_exist|is_image[foto]|max_size[foto, 1024]'
        ])) {
            $image = $this->request->getFile('foto');

            if ($image && $image->isValid() && !$image->hasMoved()) {
                $imagename = $this->request->getPost('current_image');
                unlink('images/' . $imagename);
            }

            $imageName = $image->getRandomName();
            $image->move('images', $imageName);

            $userModel->update($id, [
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'foto' => $imageName,
            ]);

            return redirect()->to('/users/index')->with('success', 'User Berhasil Diperbaharui !');
        } else {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
    }

    public function delete($id)
    {
        $userModel = new UserModel();
        $user = $userModel->find($id);

        if (!$user) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('User tidak ditemukan.');
        }

        if (!empty($user['foto']) && file_exists('images/' . $user['foto'])) {
            unlink('images/' . $user['foto']);
        }

        $userModel->delete($id);

        return redirect()->to('/users/index')->with('success', 'User berhasil dihapus.');
    }

    public function index()
    {
        $userModel = new UserModel();
        $data = [
            'title' => 'Users'
        ];
        $data['users'] = $userModel->findAll();

        return view('/users/index_page', $data);
    }
    // print pdf
    public function printPDF()
    {
        $userModel = new UserModel();
        $data['users'] = $userModel->findAll();

        // Load HTML content untuk PDF
        $html = view('users/pdf_template', $data);

        // Konfigurasi DOMPDF
        $options = new Options();
        $options->set('isRemoteEnabled', true);
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);

        // Atur ukuran dan orientasi halaman
        $dompdf->setPaper('A4', 'portrait');

        // Render PDF
        $dompdf->render();

        // Kirimkan PDF ke browser untuk diunduh
        $dompdf->stream("Daftar_User.pdf", ["Attachment" => 0]);
    }
}
