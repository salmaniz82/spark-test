<?php class requestCtrl 
{
	
	public function getRequest()
	{
		echo 'Responce for GET';
		
	}

	public function postRequest()
	{
		echo 'Responce for POST' . "<br>";

		var_dump($_POST);
	}

	public function putRequest()
	{
		echo 'Responce for PUT' . "<br>";

        var_dump($_POST);
	}

	public function deleteRequest()
	{
		echo 'Responce for DELETE' . "<br>";

        var_dump($_POST);
	}

}