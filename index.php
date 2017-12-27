<?php ob_start(); session_start();
require_once 'framework/mvc.class.php';
$route = new Route();


$route->get('/', 'pagesCtrl@homePage');

$route->get('/services', 'pagesCtrl@servicesPage');

$route->get('/products', 'pagesCtrl@productsPage');

$route->get('/contact', 'pagesCtrl@contactPage');



$route->get('/shop', 'shopCtrl@index');

$route->get('/shop/{category_id}', 'shopCtrl@showByCategory');

$route->get('/buildshopcategories', 'templateCtrl@buildShopCategories');


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

$route->get('/dashboard/pages', 'dashboardCtrl@pagesList');

$route->get('/dashboard/page/edit/{id}', 'dashboardCtrl@showPageEdit');

$route->post('/dashboard/page/edit', 'dashboardCtrl@updatePage');

$route->get('/dashboard/products/add', 'dashboardCtrl@showAddProducts');

$route->post('/dashboard/products/add', 'dashboardCtrl@saveProducts');


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




$route->otherwise( function() {

    $data['message'] = 'Request Not found';
    View::responseJson($data, 404);

});





