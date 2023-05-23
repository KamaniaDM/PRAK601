<?php
namespace App\Controllers;
use App\Models\PraktikanModel;
class Home extends BaseController
{
    public function index()
    {
        $model = new PraktikanModel();
        $data = [
            'nama' => $model->getNama(),
            'nim' => $model->getNim()
        ];
        return view('home/beranda', $data);
    }    
    public function profil()
    {
        $model = new PraktikanModel();
        $data = [
            'namaLengkap' => 'Kamania D.M',
            'nim' => '2110817320006',
            'asalProdi' => 'Teknologi Informasi',
            'hobi1' => 'Membaca Novel',
            'hobi2' => 'Mendengarkan Musik',
            'skill' => 'Menari'
        ];
        return view('home/profil', $data);
    }
}