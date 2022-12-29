<?php

    namespace App\Controllers;
    use CodeIgniter\Controller;
    use App\Models\OpinionModel;

    class Opinion extends Controller
    {
        public function index(){
            $model = new OpinionModel();
            $action = $model->findAll();
            if($action){
                $product = new Product();

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
            $model = new OpinionModel();
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
                        'messages' => 'L\'avis du client '.$datas['name'].' '. $datas['surname'].' a été éffectué avec succès !',
                        'data' => [],
                    ];
                }

            }
            return json_encode($data);

        }
        
        public function update(){
            
            $model = new OpinionModel();
    
            
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

            $model = new OpinionModel();
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
            $model = new OpinionModel();
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

    }
