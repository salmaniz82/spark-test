<?php

class shopCtrl {
	
	public $DB;

	public function __construct()
	{
		$this->DB = new Database();
	}

	


	public function index()
	{
		
		$this->DB->table = 'categories';
		$data['categories'] = $this->DB->listall()->returnData();
		$data['title'] = 'Online Store';

		$this->DB->table = 'products';
		$data['products'] = $this->DB->listall()->returnData();

		View::render('shop', $data);
	}
}
