<?php

    namespace App\Models;
    use CodeIgniter\Model;

    class OpinionModel extends Model
    {
        protected $table = 'bht_opinions';
        protected $allowedFields = ['name','surname','city','quarter','contact','opinion'];
        protected $primaryKey = 'id';
        protected $useAutoIncrement = true;
        protected $returnType = 'array';
        protected $validationRules = [
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Vous devez donner le nom du client',
                ],
            ],
            'surname' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Vous devez donner le prénom du client',
                ],
            ],
            'city' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Vous devez donner le nom de la ville',
                ],
            ],
            'quarter' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Vous devez donner le nom du quartier',
                ],
            ],
            'opinion' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Vous devez donner l\'opinion du client',
                ],
            ],

        ];
        
        
    }