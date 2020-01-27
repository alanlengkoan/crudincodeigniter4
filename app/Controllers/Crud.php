<?php namespace App\Controllers;

use CodeIgniter\Controller;
// untuk mengambil model Crud
use App\Models\Crud_model;

class Crud extends Controller
{
    // untuk menampilkan data
	public function index()
	{
        // untuk menload helper form
        helper('form');
        // untuk menload model
        $model = new Crud_model();
        $data['get_all'] = $model->get_all();
        
        echo view('atribut/head.php');
        echo view('content/main', $data);
        echo view('atribut/foot.php');
    }
    
    // untuk form ubah data
    public function action($action, $id = null)
    {
        // untuk menload helper form
        helper('form');

        if ($action == 'upd') {
            $model = new Crud_model();
            $data['get_upd'] = $model->get_upd($id);

            echo view('content/upd', $data);
        }
    }

    // untuk prose tambah data
    public function add()
    {
        $request = \Config\Services::request();
        // mengambil semua data post
        $input = $request->getVar(null, FILTER_SANITIZE_STRING);
        $data = [
            'id_data' => $input['id_data'],
            'judul'   => $input['judul'],
            'link'    => $input['link'],
            'text'    => $input['text']
        ];
        // untuk proses ubah data
        $db = \Config\Database::connect();
        $insert = $db->table('tb_data')->insert($data);
        if ($insert == true) {
            return redirect()->to('/learnci4/public/crud');
        } else {
            return redirect()->to('/learnci4/public/crud');
        }
    }

    // untuk proses ubah data
    public function upd()
    {
        $request = \Config\Services::request();
        // mengambil semua data post
        $input = $request->getVar(null, FILTER_SANITIZE_STRING);
        $data = [
            'id_data' => $input['id_data'],
            'judul'   => $input['judul'],
            'link'    => $input['link'],
            'text'    => $input['text'],
        ];
        // untuk proses ubah data
        $db = \Config\Database::connect();
        $update = $db->table('tb_data')->where('id', $input['id'])->update($data);
        if ($update == true) {
            return redirect()->to('/learnci4/public/crud');
        } else {
            return redirect()->to('/learnci4/public/crud');
        }
    }

    // untuk hapus data
    public function del($id)
    {
        $db = \Config\Database::connect();
        $delete = $db->table('tb_data')->delete(['id' => $id]);
        if ($delete == true) {
            return redirect()->to('/learnci4/public/crud');
        }
    }
}
