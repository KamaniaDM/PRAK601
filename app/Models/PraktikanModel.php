<?php
namespace App\Models;
use CodeIgniter\Model;
class PraktikanModel extends Model
{
    protected $nama = 'Kamania D.M';
    protected $nim  = '2110817320006';
    public function getNama()
    {
        return $this->nama;
    }
    public function getNim()
    {
        return $this->nim;
    }
}