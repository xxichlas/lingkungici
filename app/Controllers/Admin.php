<?php

namespace App\Controllers;

use \App\Models\EventModel;


class Admin extends BaseController
{
    protected $eventModel;
    public function __construct()
    {
        $this->eventModel = new EventModel();
    }

    public function index()
    {
        helper('html');
        $data = [
            'title' => 'Lingkungi | Admin',
            'current' => 'admin',
            'events' => $this->eventModel->getEvent()
        ];
        return view('admin/index', $data);
    }
    public function create()
    {
        // session(); sudah ada di base controller

        $data = [
            'title' => 'Tambah Data Events',
            'validation' => \Config\Services::validation()
        ];

        return view('admin/create', $data);
    }

    public function save()
    {
        //validasi input, rules validate berdasarkan name di view
        if (!$this->validate([
            'name' => [
                'rules' => 'required|max_length[70]',
                'errors' => [
                    'required' => '{field} event harus diisi',
                    'max_length' => 'Harap masukkan nama event kurang dari 70'
                ]
            ],
            'category' => [
                'rules' => 'required|max_length[20]',
                'errors' => [
                    'required' => '{field} event harus diisi',
                    'max_length' => 'Harap masukkan kategoru kurang dari 20'
                ]
            ],
            'link' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} event harus diisi',
                ]
            ],
            'date' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} event harus diisi',
                ]
            ],
            'image' => [
                'rules' => 'max_size[image,1024]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png]',
                'errors' => [

                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'File bukan gambar',
                    'mime_in' => 'File bukan gambar'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // dd($validation);
            // return redirect()->to('/komik/create')->withInput()->with('validation', $validation);
            return redirect()->to('/admin/create')->withInput();
        };

        //ambil gambar
        $fileImage = $this->request->getFile('image');

        //apakah tidak ada gambar yang diupload, set dengan gambar default


        //ambil nama file untuk dimsaukkan ke database
        // $namaImage = $fileImage->getName('sampul');


        //kalau mau nama sampul terrandomize
        //generate nama sampul random
        $namaImage = $fileImage->getRandomName();

        //pindahkan file ke folder img
        $fileImage->move('uploads', $namaImage);




        // $slug = url_title($this->request->getVar('name'), '-', true);
        $this->eventModel->save([
            'name' => $this->request->getVar('name'),
            'category' => $this->request->getVar('category'),
            'description' => $this->request->getVar('description'),
            'date' => $this->request->getVar('date'),
            'admission' => $this->request->getVar('admission'),
            'link' => $this->request->getVar('link'),
            'image' => $namaImage
        ]);

        session()->setFlashdata('pesan', 'Event berhasil ditambahkan!');

        return redirect()->to('/admin');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Ubah Data Event',
            'validation' => \Config\Services::validation(),
            'events' => $this->eventModel->getEvent(($id))
        ];

        return view('admin/edit', $data);
    }

    public function update($id)
    {
        //validasi input, rules validate berdasarkan name di view
        if (!$this->validate([
            'name' => [
                'rules' => 'required|max_length[70]',
                'errors' => [
                    'required' => '{field} event harus diisi',
                    'max_length' => 'Harap masukkan nama event kurang dari 70'
                ]
            ],
            'image' => [
                'rules' => 'max_size[image,1024]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png]',
                'errors' => [

                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'File bukan gambar',
                    'mime_in' => 'File bukan gambar'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // dd($validation);
            // return redirect()->to('/komik/create')->withInput()->with('validation', $validation);
            return redirect()->to('/admin/edit/' . $this->request->getVar('id'))->withInput();
        };

        //ambil gambar
        $fileImage = $this->request->getFile('image');

        //apakah tidak ada gambar yang diupload, set dengan gambar default
        if ($fileImage->getError() == 4) {
            $namaImage = $this->request->getVar('imageLama');;
        } else {

            //ambil nama file untuk dimsaukkan ke database
            // $namaImage = $fileImage->getName('sampul');


            //kalau mau nama sampul terrandomize
            //generate nama sampul random
            $namaImage = $fileImage->getRandomName();

            //pindahkan file ke folder img
            $fileImage->move('uploads', $namaImage);

            //hapus file lama
            unlink('uploads/' .  $this->request->getVar('imageLama'));
        }



        // $slug = url_title($this->request->getVar('name'), '-', true);
        $this->eventModel->save([
            'id' => $id,
            'name' => $this->request->getVar('name'),
            'description' => $this->request->getVar('description'),
            'date' => $this->request->getVar('date'),
            'link' => $this->request->getVar('link'),
            'image' => $namaImage
        ]);

        session()->setFlashdata('pesan', 'Event berhasil diubah!');

        return redirect()->to('/admin');
    }

    public function delete($id)
    {
        //cari gambar berdasarkan ID
        $event = $this->eventModel->find($id);


        //hapus gambar
        unlink('uploads/' . $event['image']);



        $this->eventModel->delete($id);
        session()->setFlashdata('pesan', 'Event berhasil dihapuskan!');

        return redirect()->to('/admin');
    }
}
