<?php

    namespace App\Controllers;
    use CodeIgniter\Controller;
    use App\Controllers\Category;

    class Pages extends Controller
    {

        public function view(){

            if(session() -> get('id') === null){
                return view('pages/login');
            };

            $page = $this -> request -> getGet('page');
            if($page == 'home'){
                $home = new Home();
                $home -> index();
            }else if($page == 'produit_add'){
                $category = new Category();
                $result = $category -> index();
                return view('pages/'.$page,$result);

            }else if ($page == 'produit'){
                $product = new Product();
                $result = $product -> index();
                return view('pages/'.$page,$result);

            }else if($page == 'detail_vente') {
                $vente = new Ventes();
                $result = $vente -> details();
                return view('pages/'.$page, $result);
            }else if($page == 'produit_update'){
                $product = new Product();
                $result = $product -> getOne($this -> request -> getGet('id'));
                return view('pages/'.$page,$result);
            }else if($page == 'user_update') {
                $user = new Users();
                $result = $user -> getOne($this -> request -> getGet('id'));
                return view('pages/'.$page,$result);
            }
            else if($page == 'ventes'){
                $shopping = new Ventes();
                $result = $shopping -> indexJournalier();
                return view('pages/'.$page,$result);
            }
            else if($page == 'ventes_total'){
                $shopping = new Ventes();
                $result = $shopping -> index();
                return view('pages/'.$page,$result);
            } else if($page == 'prospere'){
                $avis = new Opinion();
                $result = $avis -> index();
                return view('pages/'.$page,$result);

            }else if($page == 'customers'){
                $clients = new Clients();
                $result = $clients -> index();
                return view('pages/'.$page,$result);

            } else if($page == 'category'){
                $avis = new Category();
                $result = $avis -> index();
                return view('pages/'.$page,$result);

            }else if($page == 'users'){
                $avis = new Users();
                $result = $avis -> index();
                return view('pages/'.$page,$result);

            }else if($page == 'suggestion'){
                if($this -> request -> getGet('table') == 'produit'){
                    $product = new Product();
                    $result = $product -> suggestion($this -> request -> getGet('q'));
                    foreach($result as $key => $products){
                        echo '<li class="list-group-item list-group-item-action" data-stock= "'. $products['totalStock'] .'" data-id= "'. $products['id'].'" data-price ="' . $products['price'] .'" data-table="produit">'. $products['name'] .'</li>';
                    }
                }else if($this -> request -> getGet('table') == 'customers'){
                    $client = new Clients();
                    $result = $client -> suggestion($this -> request -> getGet('q'));
                    foreach($result as $key => $clients){
                        echo '<li class="list-group-item list-group-item-action" data-id= "'. $clients['id'].'" data-contact ="' . $clients['contact'] .'" data-table="customers">'. $clients['names'] .'</li>';
                    }
                }
                exit();
            }

            if(! is_file(APPPATH . '/Views/pages/' .$page . '.php')){
                // throw new \CodeIgniter\Exceptions\PageNotFoundException('Nous n\'avons pas trouver la page : ' . $page);
                return view('pages/home');
            }

            return view('pages/'.$page);
        }

        public function viewLogin(){
            return view('pages/login');
        }

        public function delete(){

            $table = $this -> request -> getPost('type');
            $id = $this -> request -> getPost('id');

            if(!empty($table) && !empty($id)){
                $db = \Config\Database::connect();
                $builder = $db -> table('bht_'.$table);
                if($db -> tableExists('bht_'.$table)){
                    if($builder -> delete(['id' => $id])){
                        return 'deleted';
                    }
                }
            }
        }
    }