<?php
namespace App\Controllers;
use App\Models\T_Pengantin;
use App\Models\T_Grooms;
use App\Models\T_Family;
use App\Models\T_Gallery;
use App\Models\T_Ucapan;


class Home extends BaseController
{
     public function index()
    {
        $model = new T_Pengantin();
        $model2 = new T_Grooms();
        $model3 = new T_Family();
        $model4 = new T_Gallery();


        $data['pengantin'] = $model->first();
        $data['grooms'] = $model2->findAll();
        $data['family'] = $model3->findAll();
        $data['gallery'] = $model4->first();
        
        
        return view('v_home', $data); // Mengirimkan data ke view
    }


    public function submit()
    {
        $ucapanModel = new T_Ucapan();

        // Tangkap data dari formulir
        $data = [
            'nama_visitor' => $this->request->getPost('nama_visitor'),
            'email_visitor' => $this->request->getPost('email_visitor'),
            'banyak_tamu' => $this->request->getPost('banyak_tamu'),
            'status_visitor' => $this->request->getPost('status_visitor'),
            'ucapan_visitor' => $this->request->getPost('ucapan_visitor')
        ];

        // Simpan data ke dalam tabel t_ucapan
        $ucapanModel->insert($data);

        // Redirect ke halaman setelah submit
        return redirect()->to(base_url());
    }


    public function admin()
    {
        $data = [
            'title'=>'Wedding'
        ];

        return view('layout/v_wrapper',$data);
    }

}
