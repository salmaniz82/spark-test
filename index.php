<?php ob_start(); session_start();

require_once 'framework/mvc.class.php';
$route = new Route();



$route->get('/', ['pages', 'homePage']);

$route->get('/services', ['pages', 'servicesPage']);

$route->get('/products', ['pages', 'productsPage']);

$route->get('/contact', ['pages', 'contactPage']);

$route->get('/shop', function() {

    $data['title'] = 'Shop Section';

    View::render('shop', $data);

});




$route->get('/books', ['books', 'listbooks']);

$route->get('/book/add', ['books', 'showAdd']);

$route->post('/book/add', ['books', 'saveBook']);

$route->get('/book/{id}', ['books', 'single']);

$route->get('/book/edit/{id}', ['books', 'showUpdateForm']);

$route->post('/book/edit/{id}', ['books', 'updateBook']);

$route->get('/book/delete/{id}', ['books', 'removeBook']);

$route->get('/bookapi', ['books', 'bookApi']);



// USERS specifics routes

$route->get('/register', ['user', 'showRegister']);

$route->post('/register', ['user', 'doRegister']);

$route->get('/login', ['user', 'showLogin']);

$route->post('/login', ['user', 'doLogin']);

$route->get('/logout', ['user', 'logout']);

$route->get('/profile', ['user', 'showProfile']);

$route->get('/getauthenticateduser', ['user', 'checkReturnAuthenticatedUser']);




// Dashboard routes
$route->get('/dashboard', ['dashboard', 'dasboardLanding']);

$route->get('/dashboard/pages', ['dashboard', 'pagesList']);

$route->get('/dashboard/page/edit/{id}', ['dashboard', 'showPageEdit']);

$route->post('/dashboard/page/edit', ['dashboard', 'updatePage']);



// Simple REstful Routes for tesing purpose

$route->get('/request', ['request', 'getRequest']);

$route->post('/request', ['request', 'postRequest']);

$route->put('/request', ['request', 'putRequest']);

$route->delete('/request', ['request', 'deleteRequest']);



// TODOS
$route->get('/todos', ['todos', 'listTodos']);

$route->post('/todo/add', ['todos', 'saveTodos']);

$route->post('/todo/update/{id}', ['todos', 'updateTodos']);

$route->get('/todo/clear/{id}/{userId}', ['todos', 'clearTodos']);


/*-------------- Todo SPA -----------------*/

// SHOW TODO PAGE FOR SPA
$route->get('/todospa', ['todos', 'setSpaPage']);

// RETURN LIST OF TODOS 
$route->get('/todospa/listapi', ['todos', 'listTodoApi']);

// API FOR SAVE TODO
$route->post('/todospa/add', ['todos', 'saveTodoApi']);

// API FOR UPDATE
$route->post('/todospa/update/{id}', ['todos', 'todoSpaUpdate']);

// REMOVE TODO FROM API
$route->post('/todospa/clear/{id}/{userId}', ['todos', 'clearTodoApi']);



$route->get('/dbcheck/{perPage}/{currentPage}', function() {

    $perPage = Route::$params['perPage'];
    $currentPage = Route::$params['currentPage'];


    $db = new Database();
    $db->table = 'todos';

   // $data = $db->rawSql('SELECT * FROM todos LIMIT 10 OFFSET 10')->returnData();
    $data = $db->build('S')->Colums('id, todo')->Paginate($perPage, $currentPage)->go()->returnData();
    var_dump($data);


});

$route->get('/dbcheck', function() {

    $db = new Database();
    $db->table = 'todos';

    $data = $db->build('S')->Colums()->Where('user_id = 11')->go()->returnData();

    var_dump($data);

});



$route->post('/parseheaders', function() {

    //  $data = apache_request_headers();

    // $header = $data['Content-Type'];

    $header = $_SERVER;

    
    View::responseJson($header);

});


$route->otherwise( function() {
    
    http_response_code(404);
    View::render('404');

});