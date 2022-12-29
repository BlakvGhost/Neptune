<?php

    namespace App\Controllers;
    use CodeIgniter\Controller;
    use App\Models\VenteModel;
    use App\Models\ClientModel;
    use App\Models\UserModel;
    use App\Controllers\Product;
    use App\Controllers\Clients;

    class Ventes extends Controller
    {
        public function index(){
            $model = new VenteModel();
            $userModel = new UserModel();
            $action = $model-> orderBy('id','DESC') -> where(['type' => 'ventes']) ->findAll();
            $db = \Config\Database::connect();
            $userBuilder = $db -> table('bht_users');
            $productBuilder = $db -> table('bht_produits');
            $customerBuilder = $db -> table('bht_customers');
            $data = ['status' => 200, 'messages' => 'Resultat','data' => []];
            if($action){
                foreach ($action as $k => $value){
                    foreach ($value as $key => $result){
                        $value['user'] = $userBuilder ->select('GROUP_CONCAT(bht_users.name," ",bht_users.surname) AS users') -> where('id',$value['id_user']) -> get() -> getResultArray()[0]['users'];
                        $value['product_name'] = $productBuilder ->select('name') -> where('id',$value['id_produit']) -> get() -> getResultArray()[0]['name'];
                        $value['price'] = $productBuilder ->select('bht_produits.price AS prices') -> where('id',$value['id_produit']) -> get() -> getResultArray()[0]['prices'];
                        $value['total'] = $value['price'] * $value['quantity'];
                        $value['customer_name'] = $customerBuilder ->select('names') -> where('id',$value['id_customer']) -> get() -> getResultArray()[0]['names'];
                        $value['customer_contact'] = $customerBuilder ->select('contact') -> where('id',$value['id_customer']) -> get() -> getResultArray()[0]['contact'];

                    }
                    $data['data'][] = $value;
                }
            }else $data['status'] = 400;
            return $data;
        }

        public function indexJournalier(){
            $db = \Config\Database::connect();
            $model = $db -> table('bht_ventes');
            $userModel = new UserModel();
            $action = $model -> select('*') -> orderBy('id','DESC') -> where('DATE(shopping_date) = CURRENT_DATE AND type = "ventes"') -> get() -> getResultArray();
            $userBuilder = $db -> table('bht_users');
            $productBuilder = $db -> table('bht_produits');
            $customerBuilder = $db -> table('bht_customers');
            $data = ['status' => 200, 'messages' => 'Resultat','data' => []];
            if($action){
                foreach ($action as $k => $value){
                    foreach ($value as $key => $result){
                        $value['user'] = $userBuilder ->select('GROUP_CONCAT(bht_users.name," ",bht_users.surname) AS users') -> where('id',$value['id_user']) -> get() -> getResultArray()[0]['users'];
                        $value['product_name'] = $productBuilder ->select('name') -> where('id',$value['id_produit']) -> get() -> getResultArray()[0]['name'];
                        $value['price'] = $productBuilder ->select('bht_produits.price AS prices') -> where('id',$value['id_produit']) -> get() -> getResultArray()[0]['prices'];
                        $value['total'] = $value['price'] * $value['quantity'];
                        $value['customer_name'] = $customerBuilder ->select('names') -> where('id',$value['id_customer']) -> get() -> getResultArray()[0]['names'];
                        $value['customer_contact'] = $customerBuilder ->select('contact') -> where('id',$value['id_customer']) -> get() -> getResultArray()[0]['contact'];

                    }
                    $data['data'][] = $value;
                }
            }else $data['status'] = 400;
            return $data;
        }

        public function add(){
            $datas = $this -> request -> getPost();
            $model = new VenteModel();
                if(empty($datas['id_customer'])){
                    if(empty(esc($datas['names'])) || strlen(esc($datas['names'])) < 4){
                        $data = [
                            'status' => 400,
                            'messages' => 'Nous n\'avons pas pu insérer les données',
                            'data' => [
                                'names' => 'Vous de devez au moins donner le nom du client (4 caractères mininum) ou sélectionner un client déjà existant dans la liste de suggestion.',
                            ],
                        ];
                    }else{
                        $dataCustomer = [
                            'c_id' => $datas['id_customer'],
                            'names' => esc($datas['names']),
                            'contact' => esc($datas['contact']),
                        ];
                        $client = new Clients();
                        $clientModel = new ClientModel();
                        $exists = $clientModel -> select('*') -> where(['names' => $datas['names']]) ->findAll();
                        if(!$exists){
                            if($datas['id_customer'] = $client ->add($dataCustomer)){
                                if(count($datas['name']) <= 0){
                                    $data = [
                                        'status' => 400,
                                        'messages' => 'Une erreur s\'est produite',
                                        'data' => ['name' => 'Vous devez sélectionner le produit et entrer la quantité'],
                                    ];
                                }else{
                                    $data = [
                                        'status' => 200,
                                        'messages' => 'Effectué avec succès !',
                                        'data' => [],
                                    ];
                                    $db = \Config\Database::connect();
                                    $builder = $db -> table('bht_ventes');
                                    $shoppingInserted = '';

                                    for ($i = 0, $c = count($datas['name']); $i < $c; $i ++){
                                        if($builder -> insert(['id_produit' => $datas['id_produit'][$i],'id_customer' => $datas['id_customer'],'id_user' => $datas['id_user'],'quantity' =>$datas['quantity'][$i],'type' => $datas['type']]) == true){
                                            $shoppingInserted .= ' - '.$datas['name'][$i];
                                        }
                                    }
                                    $data['messages'] .= '';
                                }
                            }
                        }else{
                            $data = [
                                'status' => 400,
                                'messages' => 'Une erreur s\'est produite',
                                'data' => ['name' => 'Ce client existe déjà. Veillez le sélectionner dans la liste de suggestion.'],
                            ];
                        }

                    }
                }else{
                    $data = [
                        'status' => 200,
                        'messages' => 'Effectué avec succès ! ',
                        'data' => [],
                    ];
                    $db = \Config\Database::connect();
                    $builder = $db -> table('bht_ventes');
                    $shoppingInserted = '';

                    for ($i = 0, $c = count($datas['name']); $i < $c; $i ++){
                        if($builder -> insert(['id_produit' => $datas['id_produit'][$i],'id_customer' => $datas['id_customer'],'id_user' => $datas['id_user'],'quantity' =>$datas['quantity'][$i],'type' => $datas['type']]) == true){
                        }
                    }
                }
            return json_encode($data);

        }

        public function update(){
            
            $model = new VenteModel();
    
            
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
                                $data = [
                                    "status" => 200,
                                    "messages" => 'Requete effectué avec succès',
                                    'data' => $datas['name'],
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

            $model = new VenteModel();
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
            $model = new VenteModel();
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
        public function getAll(){
            $model = new VenteModel();
            $id = $_GET['id'];
            $result = $model -> select('user_id') -> where(['id_produit'=> $id]);

            if(!is_null($id)){
                if(!$result){
                    $data = [
                        'status' => 400,
                        'message' => 'Nous n\'avons pas pu trouver.',
                        'data' => $model -> errors()
                    ];
                }else{
                    $data = [
                        'status' => 200,
                        'message' => 'Rercherche effectué',
                        'data' => $result
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

        public function details(){
            $model = new VenteModel();
            $userModel = new UserModel();
            $action = $model ->select('*') -> where('id_produit',$_GET['id']) -> findAll();
            $db = \Config\Database::connect();
            $userBuilder = $db -> table('bht_users');
            $productBuilder = $db -> table('bht_produits');
            $customerBuilder = $db -> table('bht_customers');
            $data = ['status' => 200, 'messages' => 'Resultat','data' => []];
            $product= new Product();
            $productName = $product -> get($_GET['id']);
            $data['product_name'] = $productName['name'];
            if($action){
                foreach ($action as $k => $value){
                    foreach ($value as $key => $result){
                        $value['user'] = $userBuilder ->select('GROUP_CONCAT(bht_users.name," ",bht_users.surname) AS users') -> where('id',$value['id_user']) -> get() -> getResultArray()[0]['users'];
                        $value['product_name'] = $productBuilder ->select('name') -> where('id',$value['id_produit']) -> get() -> getResultArray()[0]['name'];
                        $value['price'] = $productBuilder ->select('bht_produits.price AS prices') -> where('id',$value['id_produit']) -> get() -> getResultArray()[0]['prices'];
                        $value['total'] = $value['price'] * $value['quantity'];
                        $value['customer_name'] = $customerBuilder ->select('names') -> where('id',$value['id_customer']) -> get() -> getResultArray()[0]['names'];
                        $value['customer_contact'] = $customerBuilder ->select('contact') -> where('id',$value['id_customer']) -> get() -> getResultArray()[0]['contact'];

                    }
                    $data['data'][] = $value;
                }
            }else $data['status'] = 400;
           return $data;
        }

    }
