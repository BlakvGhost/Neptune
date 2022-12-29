<?php

    namespace App\Models;
    use CodeIgniter\Model;

    class ProductModel extends Model
    {
        protected $table = 'bht_produits';
        protected $allowedFields = ['name','category_id','manufacturer','price','totalStock','description','user_id'];
        protected $primaryKey = 'id';
        protected $useAutoIncrement = true;
        protected $returnType = 'array';
        protected $validationRules = [
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Vous devez spécifier le nom du produit',

                ],
            ],
            'category_id' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'ID de catégorie introuvable',
                    'numeric' => 'ID de catégorie incorrect',
                ],
            ],
            'price' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Vous devez spécifier le prix !',
                ],
            ],
            'totalStock' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Vous devez spécifier le stock total du produit !',
                ],
            ],
            'user_id' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'ID de l\'utilisateur introuvable',
                ],
            ]
        ];
        
        
    }