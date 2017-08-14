<?php ob_start(); session_start();

require_once 'framework/mvc.class.php';

$route = new Route();



$route->get('/', function(){

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

    View::render('hello', $data);
});

$route->get('/services', function() {

    $data['title'] = 'Services';
    $data['message'] = 'TExt for Services';
    View::render('page', $data);

});

$route->get('/products', function() {

    $data['title'] = 'Products';
    $data['message'] = 'Text for Products page';
    View::render('page', $data);

});



$route->get('/contact', function() {
    $data['title'] = 'Contact US';
    $data['message'] = 'This page is under development';
    View::render('contact', $data);
});


$route->get('/books', ['books', 'listbooks']);
$route->get('/book/add', ['books', 'showAdd']);
$route->post('/book/add', ['books', 'saveBook']);
$route->get('/book/{id}', ['books', 'single']);
$route->get('/book/edit/{id}', ['books', 'showUpdateForm']);
$route->post('/book/edit/{id}', ['books', 'updateBook']);
$route->get('/book/delete/{id}', ['books', 'removeBook']);

$route->get('/bookapi', function(){

    $db = new Database();
    $db->table = 'books';
    $data = $db->listall( ['id', 'name', 'author'] )->returnData();
    View::responseJson($data, 200);
    
});






$route->get('/register', ['user', 'showRegister']);
$route->post('/register', ['user', 'doRegister']);

$route->get('/login', ['user', 'showLogin']);
$route->post('/login', ['user', 'doLogin']);
$route->get('/logout', ['user', 'logout']);

$route->get('/profile', ['user', 'showProfile']);


$route->get('/dashboard', function() {

     if( !Auth::loginStatus() ) 
     {
         return header("Location: /login");
     }

    $data['title'] = 'Dashboard';
    $data['message'] = 'You can perform administrative actions in dashoard section';
    return View::render('dashboard/index', $data);

});



$route->get('/countries/{perPage}/{currentPage}', function() {

  //  $db->build('S')->Colums()->Where('user_id = '. $id)->Where('book_id ='. 59)->paginate(Route::$params['perPage'], $params['currentPage'])->Limit('10');

});


$route->get('/request', ['request', 'getRequest']);
$route->post('/request', ['request', 'postRequest']);
$route->put('/request', ['request', 'putRequest']);
$route->delete('/request', ['request', 'deleteRequest']);


$route->get('/dbcheck/{perPage}/{currentPage}', function() {

    $perPage = Route::$params['perPage'];
    $currentPage = Route::$params['currentPage'];


    $db = new Database();
    $db->table = 'todos';

   // $data = $db->rawSql('SELECT * FROM todos LIMIT 10 OFFSET 10')->returnData();
    $data = $db->build('S')->Colums('id, todo')->Paginate($perPage, $currentPage)->go()->returnData();
    var_dump($data);

        

});



// list all
$route->get('/todos', ['todos', 'listTodos']);
// save to database
$route->post('/todo/add', ['todos', 'saveTodos']);
// save to for api

// update
$route->post('/todo/update/{id}', ['todos', 'updateTodos']);

// remove
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




$route->otherwise( function() {
    
    http_response_code(404);
    View::render('404');

});









