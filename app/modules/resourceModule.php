<?php 
class resourceModule {


	public $DB;


	public function __construct()
	{
		$this->DB = new Database();
		$this->DB->table = 'resource';
	}


	public function returnAllResource()
	{
		return $this->DB->listall()->returnData();
	}


	public function pluckByName($resource)
	{

		return $this->DB->pluck('name')->where("name = '".$resource."'");

	}

	public function insert($resource)
	{
	
		$data['name'] = trim($resource);
		if($this->DB->insert($data))
		{
			return true;
		}
		else {
			return false;
		}
	}


	public function pluckIdByName($resource)
	{

		$resource = trim($resource);
		return $this->DB->pluck('id')->where("name = '".$resource."'");

	}


}