<?php

    namespace App\Models;
    use CodeIgniter\Model;

    class VenteModel extends Model
    {
        protected $table = 'bht_ventes';
        protected $allowedFields = ['id_produit','id_customer','id_user','quantity','type'];
        protected $primaryKey = 'id';
        protected $useAutoIncrement = true;
        protected $returnType = 'array';
        protected $validationRules = [
            'id_produit' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Le produit est introuvable (Sélectionner un produit dans la liste)',
                ],
            ],
            'id_customer' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'ID de client introuvable',
                ],
            ],
            'id_user' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'ID de l\'utilisateur est introuvable !',
                ],
            ],
            'quantity' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Vous devez donner la quantité !',
                ],
            ],
            'type' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Type introuvable !',
                ],
            ],
        ];
        
        
    }