<?php

    namespace App\Models;
    use CodeIgniter\Model;

    class CategoryModel extends Model
    {
        protected $table = 'bht_category';
        protected $allowedFields = ['category','comments'];
        protected $primaryKey = 'id';
        protected $useAutoIncrement = true;
        protected $returnType = 'array';
        protected $validationRules = [
            'category' => [
                'rules' => 'required|is_unique[bht_category.category]',
                'errors' => [
                    'required' => 'Vous devez spécifier le nom de la catégorie',
                    'is_unique' => 'Cette catégorie existe déjà dans la base de donnée',
                ],
            ],
        ];
        
    }