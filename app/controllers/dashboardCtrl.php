<?php 
class dashboardCtrl extends appCtrl{

    public $DB;

    public function __construct()
    {
        if( !Auth::loginStatus() ) 
        {
            return header("Location: /login");
        }    


        $this->DB = new Database();
    }


  
	public function dasboardLanding()
	{

		

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
            return header("Location: {$_POST['slug']}");
        }
        else
        {
            echo 'Failed While Updating Values';
        }

    }

    public function showAddProducts()
    {
        
       

        $this->DB->table = 'categories';
        $data['categories'] = $this->DB->listall()->returnData();

        View::render('dashboard/addproducts', $data);
    }

    public function saveProducts()
    {

        
        
        $key = array('category_id', 'name', 'detail');
        $data = $this->DB->sanitize($key);
        $this->DB->table = 'products';

        if($this->DB->insert($data))
        {
            echo 'done';
        }
        else {
            echo 'failed';
        }

    }


   

    



}