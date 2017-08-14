<?php 
class dashboardCtrl{

	public function dasboardLanding()
	{

		if( !Auth::loginStatus() ) 
    	{
        	return header("Location: /login");
    	}

    	$data['title'] = 'Dashboard';
    	$data['message'] = 'You can perform administrative actions in dashoard section';
    	return View::render('dashboard/index', $data);

	}

}