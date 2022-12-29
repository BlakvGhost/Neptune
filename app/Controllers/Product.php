<?php

    namespace App\Controllers;
    use CodeIgniter\Controller;
    use App\Models\ProductModel;

    class Product extends Controller
    {
        public function index(){
            $model = new ProductModel();
            $action = $model ->orderBy('id','DESC') -> findAll();
            if($action){

                $db = \Config\Database::connect();
                $builder = $db -> table('bht_ventes');
                $data = [
                    'status' => 200,
                    'message' => 'Recherche effectué avec succès ',
                    'data' => [],
                ];
                foreach ($action as $key => $value){

                    $value['vendus'] = $builder -> select('SUM(quantity) AS reste') -> where('id_produit', $value['id']) -> get() -> getResult('array')[0]['reste'];
                    $value['reste'] = $value['totalStock'] - $value['vendus'];
                    $value['today'] = $builder -> select('SUM(quantity) AS today') -> where('id_produit = '. $value['id'].' AND DATE(shopping_date) = CURRENT_DATE') -> get() -> getResult('array')[0]['today'];
                    $data['data'][] = $value;
                }
                return $data;
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
            $model = new ProductModel();
            if(!$model->validate($datas)){
                $data = [
                    'status' => 400,
                    'messages' => 'Nous n\'avons pas pu insérer les données',
                    'data' => $model -> errors(),
                ];
            }else {
                $exists = $model -> select('*') -> where(['name' => $datas['name']]) ->findAll();
                if($exists){
                    $data = [
                        'status' => 400,
                        'messages' => 'Nous n\'avons pas pu insérer les données',
                        'data' => ['produit' => 'Le produit exite déjà']
                    ];
                }else{
                    if(!$model->insert($datas)){
                        $data = [
                            'status' => 400,
                            'messages' => 'Nous n\'avons pas pu insérer les données',
                            'data' => $model -> errors()
                        ];
                    }else{
                        $data = [
                            'status' => 200,
                            'messages' => 'Le produit ' . $datas['name'] . ' est ajouté avec succès !',
                            'data' => [],
                        ];
                    }
                }

            }
            return json_encode($data);

        }
        
        public function update(){
            
            $model = new ProductModel();
    
            
            if($this->request->getPost()){
                $datas = $this->request->getPost();
                if(!$model ->validate($datas)){
                    $data = [
                        "status" => 401,
                        "messages" => 'Une erreur s\'est produite ',
                        'data' => $model -> errors()
                    ];
                }else{
                    if(!$model -> update($datas['id'],$datas)){
                        $data = [
                            "status" => 402,
                            "messages" => 'Une erreur s\'est produite ',
                            'data' => $model -> errors()
                        ];
                    }else{
                        $data = [
                            "status" => 200,
                            "messages" => 'Le produit '.$datas['name'].' est mise à jour !',
                            'data' => $datas['name'],
                        ];
                    }
                }
            }
            
           return json_encode($data);
        }

        public function delete(){

            $model = new ProductModel();
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

        public function getOne($id = null){
            $model = new ProductModel();

            if(!is_null($id)){
                if(!$model -> find($id)){
                    $data = [
                        'status' => 400,
                        'message' => 'Nous n\'avons pas pu trouver.',
                        'data' => $model -> errors()
                    ];
                }else{
                    $category = new Category();
                    $allCategory = $category -> index();
                    $data = [
                        'status' => 200,
                        'message' => 'Rercherche effectué',
                        'data' => $model -> find($id),
                        'allCategory' => $allCategory,
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
        public function get($id){
            $model = new ProductModel();

            if(!is_null($id)){
                if($result = $model -> find($id)){
                    return $result;
                }
            }
            return false;
        }


        public function suggestion($query = ''){
            $db = \Config\Database::connect();
            $builder = $db -> table('bht_produits');
            $q = htmlspecialchars($query);
            $result = $builder -> like('name',$q) -> limit(8    ) -> get();
            return  $result -> getResultArray();
        }

        public function appro(){
            if(count($this -> request -> getPost('name')) <= 0){
                $data = [
                    'status' => 400,
                    'messages' => 'Une erreur s\'est produite',
                    'data' => ['name' => 'Vous devez sélectionner le produit et entrer la quantité'],
                ];
            }else{
                $data = [
                    'status' => 200,
                    'messages' => 'Effectué avec succès : ',
                    'data' => [],
                ];
                $db = \Config\Database::connect();
                $builder = $db -> table('bht_produits');
                $id = $this -> request -> getPost('id');
                $name = $this -> request -> getPost('name');
                $totalStock = $this -> request -> getPost('totalStock');
                $productUpdated = '';

                for ($i = 0, $c = count($name); $i < $c; $i ++){
                    if($builder -> update(['totalStock' => $totalStock[$i]],['id' => $id[$i]]) == true){
                        $productUpdated .= ' - '.$name[$i];
                    }
                }
                $data['messages'] .= 'Le(s) produit(s) "'.trim($productUpdated).'" ont été approvisionné !';
            }
            return json_encode($data);
        }
    }
