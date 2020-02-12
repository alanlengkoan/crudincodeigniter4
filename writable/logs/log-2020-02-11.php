<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2020-02-11 18:13:13 --> Table 'db.tb_data' doesn't exist
#0 P:\project\crudincodeigniter4\system\Database\MySQLi\Connection.php(330): mysqli->query('SELECT `id`, `i...')
#1 P:\project\crudincodeigniter4\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `id`, `i...')
#2 P:\project\crudincodeigniter4\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `id`, `i...')
#3 P:\project\crudincodeigniter4\system\Database\BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT `id`, `i...', Array, false)
#4 P:\project\crudincodeigniter4\app\Models\Crud_model.php(23): CodeIgniter\Database\BaseBuilder->get()
#5 P:\project\crudincodeigniter4\app\Controllers\Crud.php(16): App\Models\Crud_model->get_all()
#6 P:\project\crudincodeigniter4\system\CodeIgniter.php(847): App\Controllers\Crud->index()
#7 P:\project\crudincodeigniter4\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Crud))
#8 P:\project\crudincodeigniter4\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 P:\project\crudincodeigniter4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2020-02-11 18:17:17 --> Duplicate entry '33' for key 'id_data'
#0 P:\project\crudincodeigniter4\system\Database\MySQLi\Connection.php(330): mysqli->query('INSERT INTO `tb...')
#1 P:\project\crudincodeigniter4\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('INSERT INTO `tb...')
#2 P:\project\crudincodeigniter4\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('INSERT INTO `tb...')
#3 P:\project\crudincodeigniter4\system\Database\BaseBuilder.php(2166): CodeIgniter\Database\BaseConnection->query('INSERT INTO `tb...', Array, false)
#4 P:\project\crudincodeigniter4\app\Controllers\Crud.php(51): CodeIgniter\Database\BaseBuilder->insert(Array)
#5 P:\project\crudincodeigniter4\system\CodeIgniter.php(847): App\Controllers\Crud->add()
#6 P:\project\crudincodeigniter4\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Crud))
#7 P:\project\crudincodeigniter4\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 P:\project\crudincodeigniter4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2020-02-11 18:17:41 --> Duplicate entry '33' for key 'id_data'
#0 P:\project\crudincodeigniter4\system\Database\MySQLi\Connection.php(330): mysqli->query('INSERT INTO `tb...')
#1 P:\project\crudincodeigniter4\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('INSERT INTO `tb...')
#2 P:\project\crudincodeigniter4\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('INSERT INTO `tb...')
#3 P:\project\crudincodeigniter4\system\Database\BaseBuilder.php(2166): CodeIgniter\Database\BaseConnection->query('INSERT INTO `tb...', Array, false)
#4 P:\project\crudincodeigniter4\app\Controllers\Crud.php(51): CodeIgniter\Database\BaseBuilder->insert(Array)
#5 P:\project\crudincodeigniter4\system\CodeIgniter.php(847): App\Controllers\Crud->add()
#6 P:\project\crudincodeigniter4\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Crud))
#7 P:\project\crudincodeigniter4\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 P:\project\crudincodeigniter4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
