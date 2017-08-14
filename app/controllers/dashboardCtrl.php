<?php 
class dashboardCtrl{

    public $DB;

    public function __construct()
    {
        $this->DB = new Database();
    }

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

    public function pagesList()
    {
        $data['title'] = 'Dashboard';
        $data['message'] = 'Edit Pages';
        $this->DB->table = 'pages';
        $data['pages'] = $this->DB->listall()->returnData();
        return View::render('dashboard/pages-list', $data);
    }

    public function showPageEdit()
    {
        $id = Route::$params['id'];
        $data['title'] = 'Dashboard';
        $data['message'] = 'Edit Pages';
        $this->DB->table = 'pages';
        $data['page'] = $this->DB->getbyId($id)->returnData();
        return View::render('dashboard/page-edit', $data);
        
    }

    public function updatePage()
    {
        $id = $_POST['id'];
        $this->DB->table = 'pages';
        $key = array('title', 'slug', 'contents');
        $updatedPageData = $this->DB->sanitize($key);

        if($this->DB->update($updatedPageData, $id))
        {
            echo 'Updated Page Success!';
        }
        else
        {
            echo 'Failed While Updating Values';
        }

    }

}