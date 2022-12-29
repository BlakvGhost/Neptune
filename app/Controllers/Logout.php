<?php

    namespace App\Controllers;
    use CodeIgniter\Controller;

    class Logout extends Controller
    {
        public function index(){
            helper('url');
            $session = session();

            $session -> destroy();
            $db = \Config\Database::connect();
            $builder = $db -> table('bht_users');
            $id = session() -> get('id');
            $builder -> update(['status' => false],['id' => $id]);
            return redirect() -> to(str_replace('index.php','',site_url()));
        }
    }