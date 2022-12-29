<?php

    namespace App\Controllers;
    use CodeIgniter\API\ResponseTrait;
    use CodeIgniter\Controller;
    use App\Models\CategoryModel;

    class Category extends Controller
    {
        use ResponseTrait;

        public function index(){
            $model = new CategoryModel();
            $action = $model-> findAll();
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
            $datas = $this->request->getPost();

            $model = new CategoryModel();

            if(!$model->validate($datas)){
                $data = [
                    'status' => 400,
                    'messages' => 'Nous n\'avons pas pu insérer les données',
                    'data' => $model -> errors(),
                ];
            }else {
                if(!$model->insert($datas)){
                    $data = [
                        'status' => 401,
                        'messages' => 'Nous n\'avons pas pu insérer les données',
                        'data' => $model -> errors()
                    ];
                }else{
                    $data = [
                        'status' => 200,
                        'messages' => 'La catégorie '. $datas['category'] .' a été ajoutée avec succès !',
                        'data' => $datas['category'],
                    ];

                }
                
            }
            return json_encode($data);
        }
        
        public function update(){
            
            $model = new CategoryModel();
    
            
            if($this->request->getVar()){
                $id = $this->request->getVar('id');
                $datas = $this->request->getVar();
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
                                $data = [
                                    "status" => 200,
                                    "messages" => 'Requete effectué avec succès',
                                    'data' => $datas,
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
            
           return $this->respond($data);
        }

        public function delete(){

            $model = new CategoryModel();
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
            $model = new CategoryModel();
            $id = $this->request->getVar('id');
            

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
            return $this->respond($data);
        }

        public function connect(){

            $session = session();
            $model = new CategoryModel();
            $datas = [
                'telephone' => $this -> request -> getVar('telephone'),
                'password' => $this -> request -> getVar('password'),
            ];

            if(!$model -> validate($datas)){
                $data = [
                    'status' => 400,
                    'messages' => 'Une erreur s\'est produite : ',
                    'data' => $model -> errors()
                ];
            }else{
                
                $users = $model -> where('telephone', $datas['telephone']) -> first();
                if(!$users){
                    $data = [
                        'status' => 400,
                        'messages' => 'Une erreur s\'est produite : ',
                        'data' => [
                            'email' => 'Le téphone n\'existe pas dans la base de données',
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
                            'client_id' => $users['id'],
                            'client_noms' => $users['noms'],
                            'client_tel' => $users['telephone'],
                            'client_active' => true,
                        ];
                        $session -> set($ses_data);
                        $data = [];
                    }
                }

            }
            echo view('templates/header',['title' => 'Clients']);
            echo view('pages/clients',$data);
            echo view('templates/footer');
        }

    }
