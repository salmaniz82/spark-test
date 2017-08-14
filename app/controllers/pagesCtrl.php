<?php
class pagesCtrl{

	public function homePage()
	{

		$data['title'] = 'Welcome';
    	$data['features'] = array(
        
        'Routing handling with anonymous function (done)',
        'Routing handling with contollers and method (done)',
        'Basic Authentication i.e login / registration (done)',
        'RESTFUL Route Processing (done)',
        'Route Parameters generation and accessabality (done)',
        'Basic Database CRUD Support (done)',
        'JSON API (done : tested crud functionality )',
        'Role Based Authorization (done)',
        'Add Active class to active links (done)',
        'Middleware',
        'Form Validation',
        'CSRF Protection',
        'SQl Injection Protection',
        'Database Relationship Mapping',
        'JWT Authentication',
        'Local for Multilang Feature'

        );

    	View::render('home', $data);

	}

	public function productsPage()
	{

		$data['title'] = 'Products';
    	$data['message'] = 'Text for Products page';
    	View::render('page', $data);

	}

	public function servicesPage()
	{

		$data['title'] = 'Services';
    	$data['message'] = 'TExt for Services';
    	View::render('page', $data);

	}

	public function contactPage()
	{
		
		$data['title'] = 'Contact US';
    	$data['message'] = 'This page is under development';
    	View::render('contact', $data);

	}
	
}