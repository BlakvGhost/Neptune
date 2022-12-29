<?php

	namespace App\Controllers;
	use CodeIgniter\Controller;

	class Home extends Controller
	{
		public function index()
		{
            if(session() -> get('id') === null){
                return view('pages/login');
            };
            $result = ['data' =>[]];

            $db = \Config\Database::connect();
            $productBuilder = $db -> table('bht_produits');
            $shopBuilder = $db -> table('bht_ventes');
            $values = [];
            $values['weekProducts'] = $productBuilder -> select('*') -> where('WEEK(publish_date) = WEEK(CURRENT_DATE)') -> countAllResults();
            $values['todayProducts'] = $productBuilder -> select('*') -> where('DATE(publish_date) = CURRENT_DATE') -> countAllResults();
            $values['todayShopping'] = $shopBuilder -> select('*') -> where('DATE(shopping_date) = CURRENT_DATE') -> countAllResults();
            $values['monthShopping'] = $shopBuilder -> select('*') -> where('MONTH(shopping_date) = MONTH(CURRENT_DATE)') -> countAllResults();
            $values['dailyShopping'] = $shopBuilder -> select('SUM(quantity)') -> where('MONTH(shopping_date) = MONTH(CURRENT_DATE)') -> countAllResults();

            $result['data'] = $values;
			return view('pages/index',$result);
		}


	}

