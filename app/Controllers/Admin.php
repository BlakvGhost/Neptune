<?php
    namespace App\Controllers;
    use App\Models\AdminModel;
    use CodeIgniter\Controller;

    class Admin extends Controller
    {
        public function index(){
            
        }
        public function connect(){

            $session = session();
            $model = new AdminModel();
            $datas = [
                'username' => $this -> request -> getVar('username'),
                'password' => $this -> request -> getVar('password'),
            ];

            if(!$model -> validate($datas)){
                $data = [
                    'status' => 400,
                    'messages' => 'Une erreur s\'est produite : ',
                    'data' => $model -> errors()
                ];
            }else{
                $model = new AdminModel();
                $users = $model -> where('username', $datas['username']) -> first();
                if(!$users){
                    $data = [
                        'status' => 400,
                        'messages' => 'Une erreur s\'est produite : ',
                        'data' => [
                            'username' => 'L utlisateur n\'existe pas dans la base de données',
                        ],
                    ];
                }else{
                    if(!password_verify($datas['password'],$users['password'])){
                        $data = [
                            'status' => 400,
                            'messages' => 'Une erreur s\'est produite : ',
                            'data' => [
                                'email' => 'Mot de passe incorrect',
                            ],
                        ];
                    }else {

                        $ses_data = [
                            'vendeur_id' => $users['id'],
                            'admin_username' => $users['username'],
                            'admin_active' => true,
                        ];
                        $session -> set($ses_data);
                        $data = [];
                    }
                }

            }
            echo view('templates/header',['title' => 'Admin']);
            echo view('pages/admin',$data);
            echo view('templates/footer');
        }
    }