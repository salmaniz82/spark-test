<?php
class featuresCtrl extends appCtrl{
	
	public function index()
	{
		echo 'return all features';
	}

	public function single()
	{
		$id = Route::$params['id'];
		echo 'show single with ID : ' . $id;
	}

	public function save()
	{

	}

	public function update()
	{
		$id = Route::$params['id'];
		echo 'update with ID : ' . $id;
	}

	public function delete()
	{
		$id = Route::$params['id'];
		echo 'Remove with ID : ' . $id;
	}

}

