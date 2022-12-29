<?php

    namespace App\Models;
    use CodeIgniter\Model;

    class UserModel extends Model
    {
        protected $table = 'bht_users';
        protected $allowedFields = ['name','surname','role','contact','password','last_login'];
        protected $primaryKey = 'id';
        protected $useAutoIncrement = true;
        protected $beforeInsert = ['hashPass'];
        protected $beforeUpdate = ['hashPass'];
        protected $returnType = 'array';
        protected $validationRules = [
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Vous devez spécifier le nom',
                ],
            ],
            'surname' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Vous devez spécifier le prénom',
                ],
            ],
            'role' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Vous devez spécifier le role',
                ],
            ],
            'contact' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Vous devez entrer un contact',
                ],
            ],
            'password' => [
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required' => 'Vous devez entrer un mot de passe !',
                    'min_length' => 'Mot de passe trop court (moins de 8 caractères)',
                ],
            ],
            'password_c' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'Vous devez confirmer le mot de passe !',
                    'matches' => 'Les mots de passes ne correspondent pas',
                ],
            ],

        ];

        protected function hashPass(array $data){
            if(!isset($data['data']['password'])) return $data;
            $data['data']['password'] = password_hash($data['data']['password'],PASSWORD_DEFAULT);
            return $data;
        }
        
        
    }