<?php

class shopCtrl {
	
	public $DB;

	public function __construct()
	{
		$this->DB = new Database();
	}

	


	public function index()
	{
		$data['title'] = 'Online Store';
		$this->DB->table = 'products';
		$data['products'] = $this->DB->listall()->returnData();

		// View::render('shop', $data);

		$template = new Template();

		$template->layout('shop-master.php')->compile('shop-contents.php', $data);
	}

	public function showByCategory()
	{

		$category_id = Route::$params['category_id'];
		$this->DB->table = 'products';
		$template = new Template();
		$data['products'] = $this->DB->build('S')->Colums()->Where("category_id = '".$category_id."'")->go()->returnData();
		$data['count'] = count($data);


		 // View::render('product-by-category', $data);

		$template->layout('shop-master.php')->compile('shop-contents.php', $data);
		
	}
}
