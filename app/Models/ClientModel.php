<?php

    namespace App\Models;
    use CodeIgniter\Model;

    class ClientModel extends Model
    {
        protected $table = 'bht_customers';
        protected $allowedFields = ['names','contact'];
        protected $primaryKey = 'id';
        protected $useAutoIncrement = true;
        protected $returnType = 'array';
        protected $validationRules = [
            'names' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Vous devez spécifier le nom du client',
                ],
            ],
            
        ];
        
        
    }