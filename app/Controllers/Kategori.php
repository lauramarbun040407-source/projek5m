<?php

namespace App\Controllers;

use App\Models\KategoriModel;

class Kategori extends BaseController
{

    protected $kategoriModel;

    public function __construct(){
        $this->kategoriModel = new KategoriModel();
}
    public function index()
    {
        $data = ['title' => "Halaman kategori",
                  'kategori' => $this->kategoriModel->findAll() ];
        return view('Kategori/index',$data);
    }

    public function add()
    {
        $data = ['title' => "Tambah Kategori"];

        return view('Kategori/form',$data);
    }

    public function store()
    {
        $this->kategoriModel->save([
            'namakategori' => $this->request->getPost('namakategori')
        ]);
            return redirect()->to('/Kategori');
    }

     public function edit($id)
    {
        $kategori = $this->kategoriModel->find($id);
        
        $data = ['title' => "Edit Data Kategori",
                  'kategori' => $kategori];
        return view('Kategori/edit',$data);
    }

    public function update($id)
    {
        $data = [
            'namakategori' => $this->request->getPost('namakategori')
        ];
        $this->kategoriModel->update($id, $data);

        return redirect()->to('/Kategori');

    }

    public function delete($id)
    {
        $this->kategoriModel->delete($id);
            return redirect()->to('/Kategori');
    }
}