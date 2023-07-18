<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use Exception;

class UserController extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        // Inisialisasi variabel di konstruktor
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Tambah User',

            'css' => css([
                'plugins/daterangepicker/daterangepicker.css',
                'plugins/jvectormap/jquery-jvectormap-2.0.2.css',
                'plugins/toastr/toastr.css',
                // 'vendors/libs/datatables-bs5/datatables.bootstrap5.css',
            ]),
            'js' => js([
                'js/waves.js',
                'js/feather.min.js',
                'js/simplebar.min.js',
                'plugins/daterangepicker/daterangepicker.js',
                'plugins/toastr/toastr.js',
                'plugins/apex-charts/apexcharts.min.js',
                'plugins/jvectormap/jquery-jvectormap-2.0.2.min.js',
                'plugins/jvectormap/jquery-jvectormap-us-aea-en.js',
                'js/client/user.js',
            ]),
        ];
        return view('content/user', $data);
    }

    public function save()
    {
        if ($this->request->isAJAX()) {
            $validation = \Config\Services::validation();

            $valid = $this->validate([
                'userData' => [
                    'label' => 'Biodata',
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama tidak boleh kosong',
                    ]
                ],
            ]);
            if (!$valid) {
                $msg = [
                    'error' => [
                        'userData' => $validation->getErrors('userData'),


                    ]
                ];
                echo json_encode($msg);
            } else {
                $validate = fetchData($this->request->getVar('userData'));
                $cleared = fetchKota($validate);
                try {
                    $data = [
                        'name' => strtoupper(explode(";", $cleared)[0]),
                        'age' => fetchUmur($validate),
                        'city' => strtoupper(explode(";", $cleared)[1]),
                        
                    ];
                  
                    if ($this->userModel->insert($data)) {
                        $msg = [
                            'success' => 'Data berhasil disimpan'
                        ];
                        echo json_encode($msg);
                    } else {
                        $msg = [
                            'failed' => 'Data gagal disimpan'
                        ];
                        echo json_encode($msg);
                    }
                  } catch (Exception $e) {
                    // Blok catch untuk menangkap dan menangani error
                    $msg = [
                        'error' => [
                            'userData' => 'Biodata tidak valid',
    
    
                        ]
                    ];
                    echo json_encode($msg);
                  }
                  
               
                
            }
        } else {
            exit('404');
        }
    }

    public function list()
    {
       
        $data = [
            'title' => 'Daftar User',
            'users' => $this->userModel->findAll(),
            'css' => css([
                'plugins/daterangepicker/daterangepicker.css',
                'plugins/jvectormap/jquery-jvectormap-2.0.2.css',
                'plugins/toastr/toastr.css',
                // 'vendors/libs/datatables-bs5/datatables.bootstrap5.css',
            ]),
            'js' => js([
                'js/waves.js',
                'js/feather.min.js',
                'js/simplebar.min.js',
                'plugins/daterangepicker/daterangepicker.js',
                'plugins/toastr/toastr.js',
                'plugins/apex-charts/apexcharts.min.js',
                'plugins/jvectormap/jquery-jvectormap-2.0.2.min.js',
                'plugins/jvectormap/jquery-jvectormap-us-aea-en.js',
                'js/client/user.js',
            ]),
        ];
        return view('content/userList', $data);
    }
}
