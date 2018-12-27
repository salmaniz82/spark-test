<?php 
abstract class appCtrl {
	
	
	
	public function refinePath($path)
    {
        $path = str_replace('\\', '/', $path);
        $path = preg_replace('/\/+/', '/', $path);

        return $path;
    }


	public function load($loadType, $Loadentity)
	{

		if($loadType == 'module')
		{
			
			 

			$path = ABSPATH.'app/modules/'.$Loadentity.'Module.php';
			$path = $this->refinePath($path);
			require_once $path;
			$ModuleClass =  $Loadentity.'Module';
			return new $ModuleClass();
		}

		elseif($loadType == 'external')
		{
			
			$path = ABSPATH.'app/external/'.$Loadentity.'.php';
			require_once($path);
			
		}

	}


	

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


	

}
