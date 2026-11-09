<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{

    protected $userModel;

    public function __construct(){
        $this->userModel = new UserModel();
}
    public function index()
    {
        $data = ['title' => "Halaman User",
                  'users' => $this->userModel->findAll() ];
        return view('User/index',$data);
    }

    public function add()
    {
        $data = ['title' => "Tambah User"];

        return view('User/form',$data);
    }

    public function store()
    {
        $this->userModel->save([
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'password'=> password_hash
            ($this->request->getPost('password'),
            PASSWORD_DEFAULT)
        ]);
            return redirect()->to('/User');
    }

     public function edit($id)
    {
        $user = $this->userModel->find($id);
        
        $data = ['title' => "Edit Data User",
                  'user' => $user];
        return view('user/edit',$data);
    }

    public function update($id)
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
        ];
        $password = $this->request->getPost('password');
        if(!empty($password)){
            $data['password'] = password_hash( $password,
            PASSWORD_DEFAULT
        );
        }
        $this->userModel->update($id, $data);

        return redirect()->to('/User');

    }

    public function delete($id)
    {
        $this->userModel->delete($id);
            return redirect()->to('/User');
    }
}