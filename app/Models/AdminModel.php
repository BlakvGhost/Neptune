<?php

    namespace App\Models;
    use CodeIgniter\Model;

    class AdminModel extends Model
    {
        protected $table = 'admin';
        protected $allowedFields = ['username','password'];
        protected $primaryKey = 'id';
        protected $useAutoIncrement = true;
        protected $beforeInsert = ['hashPass'];
        protected $beforeUpdate = ['hashPass'];
        protected $returnType = 'array';
        protected $validationRules = [
            'username' => [
                'rules' => 'required|max_length[50]',
                'errors' => [
                    'required' => 'Vous devez spécifier le nom(s)',
                    'max_length' => 'Nom trop court',
                ],
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Mot de passe vide !',
                ],
            ],
            'password_c' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'Mot de passe vide',
                    'matches' => 'Les mots de passe ne correspondent pas',
                ],
            ]
        ];

        protected function hashPass(array $data){
            if(!isset($data['data']['password'])) return $data;
            $data['data']['password'] = password_hash($data['data']['password'],PASSWORD_DEFAULT);
            return $data;
        }
        
        
    }