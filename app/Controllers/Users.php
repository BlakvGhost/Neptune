<?php

    namespace App\Controllers;
    use CodeIgniter\Controller;
    use App\Models\UserModel;
    use CodeIgniter\I18n\Time;

    class Users extends Controller
    {
        public function index(){
            $model = new UserModel();
            $action = $model->findAll();
            if($action){
                $data = [
                'status' => 200,
                'message' => 'Recherche effectué avec succès ',
                'data' => $action,
                ];
            }else{
                $data = [
                    'status' => 400,
                    'message' => 'Une erreur s\'est produite ',
                    'data' => $model -> errors(),
                    ];
            }

            return $data;
        }

        public function add(){

            $datas = $this -> request -> getPost();
            $model = new UserModel();

            if(!$model->validate($datas)){
                $data = [
                    'status' => 400,
                    'messages' => 'Nous n\'avons pas pu insérer les données',
                    'data' => $model -> errors(),
                ];
            }else {
                $exists = $model -> select('*') -> where(['contact' => $datas['contact']]) ->findAll();
                if($exists){
                    $data = [
                        'status' => 400,
                        'messages' => 'Nous n\'avons pas pu insérer les données',
                        'data' => ['contact' => 'Le contact exite déjà']
                    ];
                }else{
                    if(!$model->insert($datas)){
                        $data = [
                            'status' => 401,
                            'messages' => 'Nous n\'avons pas pu insérer les données',
                            'data' => $model -> errors()
                        ];
                    }else{
                        $data = [
                            'status' => 200,
                            'messages' => 'L\'utilisateur '.$datas['name'].' '.$datas['surname'].' a été ajouté avec succès',
                            'data' => []
                        ];

                    }
                }
                
            }
            return json_encode($data);

        }
        
        public function update(){
            
            $model = new UserModel();
    
            
            if($this->request->getPost()){
                $id = $this->request->getPost('id');
                $datas = $this->request->getPost();
                if(!is_null($id)){
                        if(!$model ->validate($datas)){
                            $data = [
                                "status" => 401,
                                "messages" => 'Une erreur s\'est produite ',
                                'data' => $model -> errors()
                            ];
                    }else{
                            if(!$model -> update($id,$datas)){
                                $data = [
                                    "status" => 402,
                                    "messages" => 'Une erreur s\'est produite ',
                                    'data' => $model -> errors()
                                ];
                            }else{
                                if($datas['changeSession'] == 'true') {session() -> set($datas);}
                                $data = [
                                    "status" => 200,
                                    "messages" => 'Requete effectué avec succès',
                                    'data' => [],
                                ];
                            }
                    }
                }else{
                        $data = [
                            "status" => 400,
                            "messages" => 'Erreur ID est nul',
                            'data' => $datas,
                        ];
                }
            }
            
           return json_encode($data);
        }

        public function delete(){

            $model = new UserModel();
            $id = $this->request->getVar('id');
           

            if(!is_null($id)){
                if(!$model -> delete($id)){
                    $data = [
                        'status' => 400,
                        'message' => 'Erreur de suppression',
                        'data' => $model -> errors()
                    ];
                }else{
                    $data = [
                        'status' => 200,
                        'message' => 'Suppression effectué',
                        'data' => $model->delete($id)
                    ];
                }
            }else{
                $data = [
                    'status' => 401,
                    'messages' => 'Erreur ! Le ID est null',
                    'data' => $id
                ];
            }
            return $this->respond($data);
        }

        public function getOne(){
            $model = new UserModel();
            $id = $_GET['id'];
            

            if(!is_null($id)){
                if(!$model -> find($id)){
                    $data = [
                        'status' => 400,
                        'message' => 'Nous n\'avons pas pu trouver.',
                        'data' => $model -> errors()
                    ];
                }else{
                    $data = [
                        'status' => 200,
                        'message' => 'Rercherche effectué',
                        'data' => $model -> find($id)
                    ];
                }
            }else{
                $data = [
                    'status' => 401,
                    'messages' => 'Erreur ! Le ID est null',
                    'data' => $id
                ];
            }
            return $data;
        }

        public function connect(){

            $session = session();
            $model = new UserModel();
            $datas = [
                'contact' => $this -> request -> getVar('contact'),
                'password' => $this -> request -> getVar('password'),
            ];

            if(!$model -> validate($datas)){
                $data = [
                    'status' => 400,
                    'messages' => 'Une erreur s\'est produite : ',
                    'data' => $model -> errors()
                ];
            }else{
                
                $users = $model -> where('contact', $datas['contact']) -> first();
                if(!$users){
                    $data = [
                        'status' => 400,
                        'messages' => 'Une erreur s\'est produite : ',
                        'data' => [
                            'email' => 'Le contact n\'existe pas',
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
                        $now = new Time(null,new \DateTimeZone('Africa/Porto-Novo'));
                        $now = $now ->format('Y-m-d h:i:s');
                        $db = \Config\Database::connect();
                        $builder = $db -> table('bht_users');
                        $builder -> update(['status' => true],['id' => $users['id']]);
                        $builder -> update(['last_login' => $now],['id' => $users['id']]);
                        $session -> set($users);
                        return 'connected';
                    }
                }

            }
            return json_encode($data);
        }

        public function suggestion($query = ''){
            $db = \Config\Database::connect();
            $builder = $db -> table('bht_customers');
            $q = htmlspecialchars($query);
            $result = $builder -> like('names',$q) -> get();
            return  $result -> getResultArray();
        }
    }
