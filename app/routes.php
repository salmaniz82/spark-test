<?php

$route = new Route();

$route->get('/', 'pagesCtrl@homePage');

$route->get('/services', 'pagesCtrl@servicesPage');

$route->get('/products', 'pagesCtrl@productsPage');

$route->get('/contact', 'pagesCtrl@contactPage');



$route->get('/shop', 'shopCtrl@index');

$route->get('/shop/{category_id}', 'shopCtrl@showByCategory');

$route->get('/buildshopcategories/{category_id}', 'templateCtrl@buildShopCategories');

$route->get('/books', 'booksCtrl@listbooks');

$route->get('/book/add', 'booksCtrl@showAdd');

$route->post('/book/add', 'booksCtrl@saveBook');

$route->get('/book/{id}', 'booksCtrl@single');

$route->get('/book/edit/{id}', 'booksCtrl@showUpdateForm');

$route->post('/book/edit/{id}', 'booksCtrl@updateBook');

$route->get('/book/delete/{id}', 'booksCtrl@removeBook');

$route->get('/bookapi', 'booksCtrl@bookApi');


// USERS specifics routes
$route->get('/register', 'userCtrl@showRegister');

$route->post('/register', 'userCtrl@doRegister');

$route->get('/login', 'userCtrl@showLogin');

$route->post('/login', 'userCtrl@doLogin');

$route->get('/logout', 'userCtrl@logout');

$route->get('/profile', 'userCtrl@showProfile');

$route->get('/getauthenticateduser', 'userCtrl@checkReturnAuthenticatedUser');


// Dashboard routes
$route->get('/dashboard', 'dashboardCtrl@dasboardLanding');


if(ACL::isPermitted('manage-roles') || ACL::isAdmin() ) {

	$route->get('/dashboard/roles?', 'rolesCtrl@roles');

	$route->post('/dashboard/roles', 'rolesCtrl@saveRole');

}


if(ACL::isPermitted('manage-resource') || ACL::isAdmin() ) {

	$route->get('/dashboard/resource?', 'resourceCtrl@resource');

	$route->post('/dashboard/resource', 'resourceCtrl@saveResource');
}	

if(ACL::isPermitted('manage-permissions') || ACL::isAdmin() ) {

	$route->get('/dashboard/permissions?', 'permissionsCtrl@index');
	
	$route->post('/dashboard/permissions', 'permissionsCtrl@save');

}


if(ACL::isPermitted('manage-pages') || ACL::isAdmin() ) {

	$route->get('/dashboard/pages', 'dashboardCtrl@pagesList');

	$route->get('/dashboard/page/edit/{id}', 'dashboardCtrl@showPageEdit');

	$route->post('/dashboard/page/edit', 'dashboardCtrl@updatePage');

}


if(ACL::isPermitted('manage-products') || ACL::isAdmin() ) {

	$route->get('/dashboard/products/add', 'dashboardCtrl@showAddProducts');

	$route->post('/dashboard/products/add', 'dashboardCtrl@saveProducts');

}



// Simple REstful Routes for tesing purpose

$route->get('/request', 'requestCtrl@getRequest');

$route->post('/request', 'requestCtrl@postRequest');

$route->put('/request', 'requestCtrl@putRequest');

$route->delete('/request', 'requestCtrl@deleteRequest');


// TODOS
$route->get('/todos', 'todosCtrl@listTodos');




$route->post('/todo/add', 'todosCtrl@saveTodos');

$route->post('/todo/update/{id}', 'todosCtrl@updateTodos');

$route->get('/todo/clear/{id}/{userId}', 'todosCtrl@clearTodos');


/*-------------- Todo SPA -----------------*/

// SHOW TODO PAGE FOR SPA
$route->get('/todospa', 'todosCtrl@setSpaPage');

// RETURN LIST OF TODOS
$route->get('/todospa/listapi', 'todosCtrl@listTodoApi');

// API FOR SAVE TODO
$route->post('/todospa/add', 'todosCtrl@saveTodoApi');

// API getting single todo
$route->get('/todospa/single/{id}', 'todosCtrl@getSingleTodo');

// API FOR UPDATE
$route->post('/todospa/update/{id}', 'todosCtrl@todoSpaUpdate');

// REMOVE TODO FROM API
$route->post('/todospa/clear/{id}/{userId}', 'todosCtrl@clearTodoApi');




// JWT AUTHENTICATION CHECKING

$route->get('/jwt/check', 'jwtauthCtrl@check');

// for testing only

$route->post('/jwt/login', 'jwtauthCtrl@login');



$route->get('/jwt/validate', 'jwtauthCtrl@validateToken');

$route->get('/jwt/admin', 'jwtauthCtrl@adminOnlyProtected');



// LANGUAGE TESTING
$route->get('/lang', 'langCtrl@listall');

$route->get('/lang/add','langCtrl@addInterface');

$route->post('/lang/add','langCtrl@save');

$route->post('/lang/debug','langCtrl@debugpost');



// Test & Debug
$route->get('/dbcheck/{perPage}/{currentPage}', 'testCtrl@testPaginate');

$route->get('/treecheck', 'testCtrl@treeCheck');


// VALIDATION TESTING
$route->get('/validationtest', 'validationCtrl@show');

$route->post('/validationtest', 'validationCtrl@processForm');


// VALIDATION TESTING
$route->get('/features', 'featuresCtrl@index');

$route->post('/features', 'featuresCtrl@save');

$route->get('/features/{id}', 'featuresCtrl@single');

$route->put('/features/{id}', 'featuresCtrl@update');

$route->delete('/features/{id}', 'featuresCtrl@delete');



/*CLIENTS API */
$route->get('/api/clients', 		'clientsCtrl@index');

$route->get('/api/clients/{id}', 	'clientsCtrl@single');

$route->post('/api/clients', 		'clientsCtrl@save');

$route->put('/api/clients/{id}', 	'clientsCtrl@update');

$route->delete('/api/clients/{id}',	'clientsCtrl@delete');



/* Insurance API */
$route->get('/api/insurance', 		'insuranceCtrl@index');

$route->get('/api/insurance/{id}', 	'insuranceCtrl@single');

$route->post('/api/insurance', 		'insuranceCtrl@save');

$route->put('/api/insurance/{id}', 	'insuranceCtrl@update');

$route->delete('/api/insurance/{id}',	'insuranceCtrl@delete');


/* Finance API */
$route->get('/api/finance', 		'financeCtrl@index');

$route->get('/api/finance/{id}', 	'financeCtrl@single');

$route->post('/api/finance', 		'financeCtrl@save');

$route->put('/api/finance/{id}', 	'financeCtrl@update');

$route->delete('/api/finance/{id}',	'financeCtrl@delete');


$route->get('/testpost/{message}', 'testCtrl@mapToModule01');


$route->get('/testmoduleload', 'testCtrl@testModuleLoad');


$route->get('/module2', 'testCtrl@showPage');

$route->get('/votest', 'testCtrl@votest');



$route->get('/cart', 'cartCtrl@index');


$route->get('/cart/add/{p_id}/{qty}', 'cartCtrl@add');

$route->post('/cart/add/{p_id}/{qty}', 'cartCtrl@add');

$route->get('/cart/less/{p_id}/{qty}', 'cartCtrl@less');


$route->get('/cart/u/{p_id}/{qty}', 'cartCtrl@updateCart');


$route->get('/cart/clear?', 'cartCtrl@clearCart');


$route->get('/cart-details?', 'cartCtrl@cartDetails');



$route->get('/img-libs', function() {

	/*

	checking if GD module is available or not;

	if (!extension_loaded('imagick'))
    echo 'imagick not installed';
    */

	

	// loading file with absolute url;


	$filename = ABSPATH.'/assets/images/shift1920.jpg';

	// imagecreatefrompng($filename);


	$imgOrgDimensions = getimagesize($filename, $info);


	$width_org = $imgOrgDimensions[0];
	$height_org = $imgOrgDimensions[1];
	$image_type = $imgOrgDimensions['mime'];
	$bits_org = $imgOrgDimensions['bits'];
	$aspectRatio_W_org = $width_org / $height_org;
	$aspectRatio_H_org = $height_org / $width_org;


	 ddx($imgOrgDimensions);


	


	function imagePrep($filename, $image_type)
	{

			if($image_type == 'image/png' || strpos($image_type, 'png') )
			{
				echo "image is png";
			}

			else if ($image_type == 'image/jpeg' || strpos($image_type, 'jpg') )
			{
				echo "image is jpeg";

			}

			else if ( strpos($image_type, 'bmp') )
			{
				echo "this is bmp";
			}

			else if ( $image_type == "image/gif" || strpos($image_type, 'gif') ) 
			{
				echo "format is GIF";
			}

			else {

				throw new Exception("File is not support with type of $image_type", 1);
				
			}

	}




	$destination = imagecreatetruecolor(500, 500);

	$sourceImage = imagecreatefromjpeg($filename);

	

	$width_new = 500; 

	$height_new = 500;


	imagecopyresampled($destination, $sourceImage, 0, 0, 0, 0, $width_org, $height_org, $width_new, $height_new);
	imagejpeg($destination, null, 100);


	header('Content-Type: image/jpeg');

});


$route->get('/sse', 'sseCtrl@page');
$route->get('/sse-server', function() {

	echo "attempt to make it work within the system";

});


$route->get('/trans', function() {

$lang = lang();
$lang->setLang();
echo $lang->lang;

});



$route->get('/switchLang', function() {

	$redirectUrl = $_SERVER['HTTP_REFERER'];
	lang()->switchLang();
	header("Location: $redirectUrl");

});



$route->get('/hashbasic', function() {
	$string = "abc123456";
	/*
	$hashedString = password_hash($string, PASSWORD_BCRYPT, array(

		'cost' => 12
	)

	);

	*/

	$hashedPassword = '$2y$12$JcwYboi/KQlh6icotHZc9uFC63tYUbEX4KgYWArM.jn8kBX/QL79u';
	var_dump($hashedPassword);	
	if(password_verify($string, $hashedPassword)) {
		echo "Matced";   
	} 
	else {
		echo "not matched";
	}

});




$route->get('/updatehash', 'userCtrl@udpatePasswordHash');









$route->otherwise( function() {
    $data['message'] = 'Request Not found';
    View::responseJson($data, 404);
});





