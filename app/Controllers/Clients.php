<?php

    namespace App\Controllers;
    use CodeIgniter\API\ResponseTrait;
    use CodeIgniter\Controller;
    use App\Models\ClientModel;

    class Clients extends Controller
    {
        use ResponseTrait;

        public function index(){
            $db = \Config\Database::connect();
            $model = new ClientModel();
            $action = $model->findAll();
            $customerBuilder = $db -> table('bht_customers');
            $ventesBuilder = $db -> table('bht_ventes');
            $data = ['status' => 200, 'messages' => 'Resultat','data' => []];
            if($action){
                foreach ($action as $k => $value){
                    foreach ($value as $key => $result){
                        $value['nbAchat'] = $ventesBuilder ->select('COUNT(*) AS users') -> where('id_customer',$value['id']) -> get() -> getResultArray()[0]['users'];
                       $value['last_shopping_date'] = $ventesBuilder ->select('MAX(shopping_date) AS last') -> where('id_customer',$value['id']) -> get() -> getResultArray()[0]['last'];
                       // $value['product_name'] = $productBuilder ->select('name') -> where('id',$value['id_produit']) -> get() -> getResultArray()[0]['name'];

                    }
                    $data['data'][] = $value;
                }
            }else $data['status'] = 400;
            return $data;
        }

        public function add($datas){
            $model = new ClientModel();

            if($id = $model -> insert($datas)){
                return $id;
            }
            return false;

        }
        
        public function update(){
            
            $model = new ClientModel();
    
            
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

            $model = new ClientModel();
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
            $model = new ClientModel();
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
            $model = new ClientModel();
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

        public function suggestion($query = ''){
            $db = \Config\Database::connect();
            $builder = $db -> table('bht_customers');
            $q = htmlspecialchars($query);
            $result = $builder -> like('names',$q) -> get();
            return  $result -> getResultArray();
        }
    }
