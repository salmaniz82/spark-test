<?php 
abstract class appCtrl {
	
	

	public function getID()
	{
		
		if( isset(Route::$params['id']) )
		{
			return Route::$params['id'];		
		}
		else 
		{
			return null;
		}

	}

	public function appMethod()
	{
		return 'this is from the appcontroller';
	}

	
	public function canManageCourse()
	{
		if( Auth::loginStatus() && (Auth::User()['role_id'] == 1 ))
		{
			return true;
		}
		else
		{
			return false;
		}
	}


	public function load($loadType, $Loadentity)
	{

		if($loadType == 'module')
		{
			require_once ABSPATH.'app/modules/'.$Loadentity.'Module.php';
			$ModuleClass =  $Loadentity.'Module';
			return new $ModuleClass();
		}	

	}

}
