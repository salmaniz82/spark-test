<?php 

class templateCtrl
{


	public $DB;

	public function __construct()
	{
		$this->DB = new Database();
	}

	public function buildShopCategories()
	{
		$this->DB->table = 'categories';
		$data['categories'] = $this->DB->listall()->returnData();
		View::render('templates/shop-categories', $data);
	}


}