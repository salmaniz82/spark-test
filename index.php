<?php ob_start(); session_start();

require_once 'framework/mvc.class.php';

$route = new Route();



$route->get('/', function(){

    $data['title'] = 'Welcome';

    $data['features'] = array(
        
        'Basic Authentication',
        'RESTFUL Request Processing',
        'Basic Database CRUD Support',
        'Role Based Authorization',
        'Middleware',
        'Form Validation',
        'CSRF Protection',
        'SQl Injection Protection',
        'Database Relationship Mapping',
        'JSON API',  
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

    http_response_code(202);
    header('Content-Type: application/json');
    echo json_encode($data);
    
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
    $data = $db->build('S')->Colums()->Paginate($perPage, $currentPage)->go()->returnData();
    var_dump($data);

        

});


// list all
$route->get('/todos', ['todos', 'listTodos']);

// show add form
$route->get('/todo/add', ['todos', 'showAddTodos']);
// save to database
$route->post('/todo/add', ['todos', 'saveTodos']);

// update
$route->post('/todo/update/{id}', ['todos', 'updateTodos']);

// remove
$route->get('/todo/clear/{id}/{userId}', ['todos', 'clearTodos']);






$route->get('/todospa', ['todos', 'setSpaPage']);

$route->get('/todolistapi', ['todos', 'listTodoApi']);


$route->otherwise( function() {
    
    http_response_code(404);
    View::render('404');

});









