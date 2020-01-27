<?php namespace App\Models;

use CodeIgniter\Model;

class Crud_model extends Model
{
    // variabel global
    public $db;

    public function __construct()
	{
        parent::__construct();
        // untuk koneksi ke database
        $this->db = \Config\Database::connect();
    }
    
    // untuk menampilkan semua data
    public function get_all()
    {
        $results = $this->db
            ->table('tb_data')
            ->select('id, id_data, judul, link, text')
            ->get()
            ->getResult();
        return $results;
    }

    // untuk menampilkan  data berdasarkan id
    public function get_upd($id)
    {
        $results = $this->db
            ->table('tb_data')
            ->where(['id' => $id])
            ->get()
            ->getRow();
        return $results;
    }
}