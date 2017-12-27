# Helium MVC
This name is not yet official name for this framework.

## It simply started out with basic idea
Super lightweight and the easiest PHP MVC framework you have ever seen that is why I called it helium.
 
## Why should anyone use it ?
Ideal in a situation when using a full blown CMS or Framework just an overkill in a given situation, instead of starting everything from scracth in procedural way, why not do it in an elegant way and if incase you need to scale you can easily switch to other solution and easily reference your existing work to save some time since you were already kept your building block seperate as per rules.

## What it offers
- Basic routing with closures
- Routing with parameters
- Route mapping to controllers
- RESTFUL Routing
- view class for rendering views
- Return JSON response with status code
- Create RESTFUL JSON APIs with Ease
- Session based authentication
- JWT token based authentication


<code>

$route = new Route();

$route->get('/', function() {
    echo "Hello World";  
})

$route->get('/about', 'pagesController@about');

$route->get('/book/{id}', function() {

    $id = Route::$params['id'];
    
});

$route->get('/contact', function() {

    return view::render('contact');
    
});


</code>



